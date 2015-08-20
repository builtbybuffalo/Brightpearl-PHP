<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */

    "operations" => array(

        /**
         *    getWarehouse() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/warehouse/warehouse/get.html
         */
        "getWarehouse" => array(
            "httpMethod" => "GET",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/warehouse/{id}",
            "summary" => "Get warehouse(s)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of warehouse(s) to get",
                    "required" => false,
                ),

            ),
        ),

        /**
         *    getWarehouseAvailability() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/warehouse/product-availability/get.html
         */
        "getWarehouseAvailability" => array(
            "httpMethod" => "GET",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/product-availability/{id}",
            "summary" => "Get warehouse(s)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of warehouse(s) to get",
                    "required" => false,
                ),

            ),
        ),

        /**
         *    getGoodsOutNote() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/warehouse/goods-out-note/get.html
         */
        "getGoodsOutNote" => array(
            "httpMethod" => "GET",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/order/{orderId}/goods-note/goods-out/{id}",
            "summary" => "Get goods-out note(s)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "orderId" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of order(s) to use",
                    "default" => "*",
                    "required" => false,
                ),

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of goods-out-note(s) to get",
                    "required" => false,
                ),

            ),
        ),

        /**
         *    postGoodsOutNote() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/warehouse/reservation/post.html
         */
        "postGoodsOutNote" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/order/{orderId}/goods-note/goods-out",
            "summary" => "Create a goods out note",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "orderId" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of order(s) to use",
                    "default" => "*",
                    "required" => false,
                ),

                "priority" => array(
                    "type" => "boolean",
                    "location" => "json",
                    "description" => "Whether or not this is priority",
                    "required" => false,
                ),

                "shippingMethodId" => array(
                    "type" => "integer",
                    "location" => "json",
                    "description" => "Shipping Method ID",
                    "required" => false,
                ),

                "labelUrl" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The shipping label URL",
                    "required" => false,
                ),

                "warehouses" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "The product data to send",
                    "required" => false,
                ),
            ),
        ),

        /**
         *    postStockCorrection() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/warehouse/stock-correction/post.html
         */
        "postStockCorrection" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/warehouse/{warehouseId}/stock-correction",
            "summary" => "Create a goods out note",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "warehouseId" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of warehouse to correct",
                    "default" => "*",
                    "required" => false,
                ),

                "corrections" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "A list of corrections",
                    "required" => true,
                ),
            ),
        ),

        /**
         *    postGoodsOutNote() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/warehouse/goods-out-note%20event/post.html
         */
        "postGoodsOutEvent" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/goods-note/goods-out/{goodsOutId}/event",
            "summary" => "Fire an event on a goods out note",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "goodsOutId" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of goods out note to use",
                    "required" => true,
                ),

                "events" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "the events to fire",
                    "required" => false,
                ),
            ),
        ),

        /**
         *    postOrderReservation() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/warehouse/reservation/post.html
         */
        "postOrderReservation" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/order/{orderId}/reservation/warehouse/{warehouseId}",
            "summary" => "Create a warehouse reservation",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "orderId" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of order(s) to use",
                    "default" => "*",
                    "required" => false,
                ),

                "warehouseId" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "ID of the warehouse to send items from",
                    "required" => false,
                ),

                "products" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "The product data to send",
                    "required" => false,
                ),

            ),
        ),

        /**
         *    postGoodsInNote() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/warehouse/goods-in-note/post.html
         */
        "postGoodsInNote" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/order/{orderId}/goods-note/goods-in",
            "summary" => "Create a goods in note",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "orderId" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of order(s) to use",
                    "default" => "*",
                    "required" => false,
                ),

                "transfer" => array(
                    "type" => "boolean",
                    "location" => "json",
                    "description" => "Whether the note is because of a transfer",
                    "required" => false,
                ),

                "warehouseId" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The location to put the stock",
                    "required" => true,
                ),

                "goodsMoved" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "The lines to move",
                    "required" => true,
                ),

                "receivedOn" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The date this was received",
                    "required" => true,
                ),
            ),
        ),


    ),

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */

    "models" => array(

    ),
);
