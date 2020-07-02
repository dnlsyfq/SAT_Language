<?php

return [
    // Page & Sidenav 
    "Dashboard" => "Dashboard",
    // Page 
    "Dashboard" => [ 
        // Card
        "FARM"=>"FARM", 
        // Card
        "WEATHER REPORT"=>"WEATHER REPORT",
        // Card
        "Farm" => "Farm",
        "Farm"=>[
            "ALERT" =>"ALERT", 
            "ACTIVE DEVICE" => "ACTIVE DEVICE",
            "SUGGESTED ACTION" => "SUGGESTED ACTION"
        ] ,
        // Card Toggle Button & Content
        "Reading" => "Reading",
        "Reading" => [
            "Reading for" => "Reading for",
            "Temperature" => "Temperature",
            "Ambient Temperature" => "Ambient Temperature",
            "Humidity" => "Humidity",
            "Close" => "Close"
        ],
        // Card Toggle Button & Content
        "Farm Details" => "Farm Details",
        "Farm Details" => [
            // Redirect to .../smart-tani-pineapple/farms/7
            "LOCATION" => "LOCATION",
            "INFORMATION" => "INFORMATION",
            "INFORMATION" => [
                "ALERT" => "ALERT",
                "ACTIVE DEVICE" => "ACTIVE DEVICE",
                "READING" => "READING",
                "SUGGESTED ACTION" => "SUGGESTED ACTION"
            ],
            "DEVICE" => "DEVICE",
            "DEVICE" => [
                "ID" => "ID",
                "NAME" => "NAME",
                "TYPE" => "TYPE"
            ],
            "READING" => "READING",
            "READING" => [
                "Device Reading Values" => "Device Reading Values",
                "Temperature" => "Temperature",
                "Ambient Temperature" => "Ambient Temperature",
                "Humidity" => "Humidity"
            ],
            "ALERT" => "ALERT",
            "ALERT" => [
                "Surrounding temperature level too low detected by" => "Surrounding temperature level too low detected by" ,
                "Water temperature level too low detected" => "Water temperature level too low detected",
                "Surrounding temperature level too high detected by" => "Surrounding temperature level too high detected by",
                "Water tempereature level too high detected" => "Water tempereature level too high detected",

            ],
            "SUGGESTED ACTION" => "SUGGESTED ACTION"
        ],
        // Div
        "Plots need attention" => "Plots need attention",
        // Card 
        "PLOT" => "PLOT",
        "PLOT" => [
            "TOTAL ALERT" => "TOTAL ALERT",
            "ACTIVE DEVICE" => "ACTIVE DEVICE",
            "SUGGESTED ACTION" => "SUGGESTED ACTION",
            // Button
            "Reading" => "Reading",
            "Reading" =>  [
                "Reading for" => "Reading for",
                "Device Reading Values" => "Device Reading Values",
                "Temperature" => "Temperature",
                "Ph" => "Ph",
                "Close" => "Close"
            ],
            // Button
            "Details" => "Details",
            "Details" => [
                // Redirect to .../smart-tani-pineapple/plots/8
                
                //Card
                "LOCATION" => "LOCATION",
                //Card
                "INFORMATION" => "INFORMATION",
                "INFORMATION" => [
                    "ALERT" => "ALERT",
                    "ACTIVE DEVICE" => "ACTIVE DEVICE",
                    "READING" => "READING",
                    "SUGGESTED ACTION" => "SUGGESTED ACTION",
                    //  Button
                    "Set Location" => "Set Location",
                    "Set Location for" => "Set Location for",
                    "Set Location" => [
                        "Submit" => "Submit",
                        "Close" => "Close"
                    ]
                ],
                // Card
                "DEVICE" => "DEVICE",
                "DEVICE" => [
                    "ID" => "ID" ,
                    "NAME" => "NAME" ,
                    "TYPE" => "TYPE"
                ],
                // Card 
                "READING" => "READING",
                "READING" => [
                    "Device Reading Values" => "Device Reading Values",
                    "Ph" => "Ph",
                    "Temperature" => "Temperature"
                ],
                // Card
                "ALERT" => [
                    "Surrounding temperature level too low detected by" => "Surrounding temperature level too low detected by" ,
                    "Water temperature level too low detected" => "Water temperature level too low detected",
                    "Surrounding temperature level too high detected by" => "Surrounding temperature level too high detected by",
                    "Water tempereature level too high detected" => "Water tempereature level too high detected",
    
                ],
                // Card
                "SUGGESTED ACTION" => "SUGGESTED ACTION" ,
                "SUGGESTED ACTION" => [
                    "Suggestion" => "Suggestion",
                    "Please apply some lime solution to increase pH alkalinity for plot 1" => "Please apply some lime solution to increase pH alkalinity for plot 1"
                ]
            ],
        ],
        // Card
        "NOTIFICATION LIST" => "NOTIFICATION LIST",
        "NOTIFICATION LIST" => [
            "Alert" => "Alert",
            "Surrounding temperature level too high" => "Surrounding temperature level too high",
            "PH level too low" => "PH level too low",
            "Please apply some lime solution to increase pH alkalinity" => "Please apply some lime solution to increase pH alkalinity",
            "Water temperature level too low" => "Water temperature level too low" ,
            "Water temperature level too high" => "Water temperature level too high"
        ]
    ] ,
    "Farm" => "Farm",
    "Farm" => [
        "FARM LAYOUT" => "FARM LAYOUT",
        "NOTIFICATION LIST" => "NOTIFICATION LIST",
        "PLOT VISUAL" => "PLOT VISUAL",
        "PLOT VISUAL" => [
            "ID" => "ID",
            "PLOT NAME" => "PLOT NAME",
            "DEVICE COUNT" => "DEVICE COUNT"
        ],
        "NOTIFICATION LIST" => "NOTIFICATION LIST"
    ],
    "Plot" => [
        "FARM" => "FARM",
        "FARM LAYOUT" => "FARM LAYOUT",
        "NOTIFICATION LIST" => "NOTIFICATION LIST",
        "PLOT GRAPH" => [
            "PH" => "PH",
            "Temperature" => "Temperature",
            "Moisture" => "Moisture",
            "Nitrogen" => "Nitrogen",
            "Phosphorus" => "Phosphorus",
            "Potassium" => "Potassium"
        ],
        "PLOT DETAIL" => "PLOT DETAIL",
        "PLOT DETAIL" => [
            "ID" => "ID",
            "PLOT NAME" => "PLOT NAME",
            "DEVICE COUNT" => "DEVICE COUNT",
            "PH" => "PH",
            "MOISTURE" => "MOISTURE",
            "TEMPERATURE" => "TEMPERATURE",
            "DATE" => "DATE"
        ]
    ],
    "Device" => "Device",
    "Device" => [
        "Device List" => "Device List",
        "ID" => "ID",
        "NAME(DEVICEID)" => "NAME(DEVICEID)",
        "CUSTOMER" => "CUSTOMER",
        "PRODUCT" => "PRODUCT",
        "ASSIGNED TO" => "ASSIGNED TO",
        "BATTERY LEVEL" => "BATTERY LEVEL",
        "HEALTH" => "HEALTH",
        "LAST ACTIVE AT" => "LAST ACTIVE AT"
    ] ,
    "Device Raw Reading List" => "Device Raw Reading List",
    "Device Raw Reading List"=>[
        "Device" => "Device",
        "ID" => "ID",
        "DEVICE" => "DEVICE",
        "HEADER" => "HEADER",
        "PAYLOAD" => "PAYLOAD",
        "TRANSLATED" => "TRANSLATED"

    ],
    "Map" => "Map",
    "Report" => "Report",
    "Report" => [
        "Sensors report by device" => "Sensors report by device",
        "Download Report - Excel" => "Download Report - Excel"
    ],
    "Operation Management" => "Operation Management",
    "Operation Management" => [
        "My Task" => [
            "My Task" => "My Task",
            "ID" => "ID",
            "NAME" => "NAME",
            "DURATION" => "DURATION",
            "DESCRIPTION" => "DESCRIPTION",
            "DATE" => "DATE",
            "STATUS" => "STATUS",
            "ACTION" => "ACTION",
            // ADD BUTTON
            "Create Task" => [
                "Create Task" => "Create Task",
                "Create a new task" => "Create a new task",
                "NEW TASK" => "NEW TASK",
                "Task name" => "Task name",
                "Duration" => "Duration",
                "Task description" => "Task description",
                "Date" => "Date",
                "Status" => "Status"
                "Cancel" => "Cancel"
            ]
        ] ,
        "Inventory" => "Inventory",
        "Inventory" => [
            "ID" => "ID",
            "NAME" => "NAME",
            "TYPE" => "TYPE",
            "DESCRIPTION" => "DESCRIPTION",
            "DATE END" => "DATE END",
            "PRICE PER UNIT" => "PRICE PER UNIT",
            "STATUS" => "STATUS",
            "ACTION" => "ACTION",
            // BUTTON
            "ADD INVENTORY" => "ADD INVENTORY",
            "ADD INVENTORY" => [
                "INVENTORY" => "INVENTORY",
                "Create a new inventory" => "Create a new inventory",
                "Item Name" => "Item Name",
                "Type" => "Type",
                "Item description" => "Item description",
                "Date end" => "Date end",
                "Price per Unit" => "Price per Unit",
                "Status" => "Status",
                "Create Inventory" => "Create Inventory",
                "Cancel" => "Cancel"
            ]
        ] ,
        "Reporting" => "Reporting",
        "Reporting" => [
            
            // CARD
            "HARVESTING REPORT" => "HARVESTING REPORT",
            "HARVESTING REPORT" => [
                
                "Plot" => "Plot",
                "Date from" => "Date from",
                "Date end" => "Date end",
                "Hormone" => "Hormone",
                "Est. No. of Crop" => "Est. No. of Crop"
            ],

            "GENERATE" => "GENERATE",
            "DOWNLOAD" => "DOWNLOAD",
            "ITEM" => "ITEM",
            "CROP'S GRADE" => "CROP'S GRADE",
            "TTL CROP" => "TTL CROP",
            "TTL CROP COUNT" => "TTL CROP COUNT",
            "TTL KG PER GRADE" => "TTL KG PER GRADE",
            "CROP PRICE PER KG" => "CROP PRICE PER KG",
            "TTL SALES PER GRADE" => "TTL SALES PER GRADE",
            "TTL GRAND SALES" => "TTL GRAND SALES"
        ] ,
        "Operation Input" => "Operation Input",
        "Operation Input" => [
            "HORMONE" => "HORMONE",
            "ID" => "ID",
            "DATE OF HORMONE" => "DATE OF HORMONE",
            "PLOT" => "PLOT",
            "BOUNDARY" => "BOUNDARY",
            "ESTIMATE CROP COUNT" => "ESTIMATE CROP COUNT",
            "DATE OF HARVESTED" => "DATE OF HARVESTED",
            "REMARK" => "REMARK",
            "ACTION" => "ACTION",
            "OUTPUT" => "OUTPUT",
            "CROP'S OUTPUT" => "CROP'S OUTPUT",
            "DATE CREATED" => "DATE CREATED",
            "PLOT" => "PLOT",
            "CROP'S GRADE" => "CROP'S GRADE",
            "NEW HORMONE" => "NEW HORMONE",
            "Create a new hormone" => "Create a new hormone",
            "Date of hormone" => "Date of hormone",
            "Boundary" => "Boundary",
            "Est. Crop Count" =>  "Est. Crop Count",
            "Date Of Harvested" => "Date Of Harvested",
            "Remark" => "Remark" ,
            "Create Hormone" => "Create hormone",
            "Cancel" => "Cancel",
            "NEW OUTPUT" => "NEW OUTPUT",
            "Create a new output" => "Create a new output",
            "Select plot" => "Select plot",
            "Create output" => "Create output",
            "SALES" => "SALES",
            "RESELLER" => "RESELLER",
            "DATE OF SALES" => "DATE OF SALES",
            "CROP'S GRADE" => "CROP'S GRADE",
            "PAYMENT METHOD" => "PAYMENT METHOD",
            "REMARK" => "REMARK",
            "ACTION" => "ACTION",
            "NEW SALE" => "NEW SALE",
            "Date of sales" => "Date of sales",
            "Crop's Grade" => "Crop's Grade",
            "Payment method" => "Payment Method",
            "Create sale" => "Create sale",
            "PAYMENT METHOD" => "PAYMENT METHOD",
            "AMOUNT PAID(RM)" => "AMOUNT PAD(RM)",
            "TOTAL PAID(RM)" => "TOTAL PAID(RM)"
        ]
    ] ,
    "Feedback" => "Feedback",
    "Logout" => "Logout"
];

