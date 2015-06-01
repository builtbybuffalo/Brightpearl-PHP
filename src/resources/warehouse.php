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
