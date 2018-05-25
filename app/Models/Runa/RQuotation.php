<?php

namespace App\Models\Runa;

use Illuminate\Database\Eloquent\Model;

class RQuotation extends Model
{
    protected $fillable = [
    	'folio', 'type', 'r_client_id', 'description', 'retainer', 
    	'amount', 'paid_at', 'delivered_at', 'r_team_id', 'started_at', 
    	'ended_at', 'products', 'weight', 'status'
    ];

    function client()
    {
    	return $this->belongsTo(RClient::class, 'r_client_id');
    }

    function storeProducts($request)
	{
		$products = [];
        for ($i = 0; $i < count($request->quantity); $i++) {
            $product = [];
            if($request->quantity[$i] > 0) {
                $product['i'] =  $request->material[$i];
                $product['q'] =  $request->quantity[$i];
                $product['a'] =  $request->subtotal[$i];
                array_push($products, $product);
            }
        }

        $this->update([
        	'products' => serialize($products)
        ]);

        return;
	}
}
