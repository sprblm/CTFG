<?php

namespace App\Http\Controllers\Api\TP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\DocuConfs;
use GuzzleHttp\Client;

class DocuController extends Controller {
    public function searchEmailAndApplyCategory(Request $request){
        \Log::info($request);
        $client = new Client();
        
        $headers = [
            'Authorization' => 'Bearer ' . $request->token,
            'Content-Type'  => 'application/json',
        ];

        $searchEndpoint = "https://graph.microsoft.com/v1.0/users/{$request->upn}/messages";
        $searchParams = [
            '$filter' => "internetMessageId eq '{$request->internetMessageId}'"
        ];

        // Search for the email
        $searchResponse = $client->get($searchEndpoint, [
            'headers' => $headers,
            'query'   => $searchParams,
        ]);

        $messages = json_decode($searchResponse->getBody()->getContents(), true)['value'] ?? [];

        if (empty($messages)) {
            return response()->json(['success' => false], 404);
        }

        $messageId = $messages[0]['id'];

        $updateEndpoint = "https://graph.microsoft.com/v1.0/users/{$upn}/messages/{$messageId}";
        $updateBody = [
            'categories' => [$request->category]
        ];

        // Update the email category
        $updateResponse = $client->patch($updateEndpoint, [
            'headers' => $headers,
            'json'    => $updateBody,
        ]);

        return response()->json(['success' => $updateResponse->getStatusCode() == 200]);
    }

    public function getConf(Request $request) {
        $name = $request->name;

        $confs = DocuConfs::where('name', $name)->first();

        if ($confs) {
            return response()->json([
                'message' => 'Success',
                'access' => $confs->access,
                'refresh' => $confs->refresh,
            ], 200);
        }

        return response()->json([
            'error' => 'Confs not found'
        ], 404);
    }

    public function updateConf(Request $request) {
        $name = $request->segment(4);

        $confs = DocuConfs::where('name', $name)->first();

        if ($confs) {
            $confs->update([
                'access' => $request->input('access'),
                'refresh' => $request->input('refresh'),
            ]);

            return response()->json([
                'message' => 'Success',
            ], 200);
        }

        return response()->json([
            'error' => 'Confs not found'
        ], 404);
    }
}
