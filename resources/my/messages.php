<?php

return [
    // Page & Sidenav
    "Dashboard" => "Papan pemuka",
    // Page
    "Dashboard" => [ 
        // Card
        "FARM"=>"LADANG", 
        // Card
        "WEATHER REPORT"=>"LAPORAN CUACA",
        // Card
        "Farm" => "Ladang",
        "Farm"=>[
            "ALERT" =>"PERHATIAN", 
            "ACTIVE DEVICE" => "PERANTI AKTIF",
            "SUGGESTED ACTION" => "TINDAKAN YANG DICADANGKAN"
        ] ,
         // Card Toggle Button & Content
         "Reading" => "Bacaan",
        "Reading" => [
            "Reading for" => "Bacaan untuk",
            "Temperature" => "Suhu",
            "Ambient Temperature" => "Suhu Sekitar",
            "Humidity" => "Kelembaban",
            "Close" => "Tutup"
        ],
        // Card Toggle Button & Content
        "Farm Details" => "Butiran Ladang",
        "Farm Details" => [
            // Redirect to .../smart-tani-pineapple/farms/7
            "LOCATION" => "LOKASI",
            "INFORMATION" => "MAKLUMAT",
            "INFORMATION" => [
                "ALERT" => "PERHATIAN",
                "ACTIVE DEVICE" => "PERANTI AKTIF",
                "READING" => "  BACAAN",
                "SUGGESTED ACTION" => "TINDAKAN YANG DICADANGKAN"
            ],
            "DEVICE" => "PERANTI",
            "DEVICE" => [
                "ID" => "ID",
                "NAME" => "NAMA",
                "TYPE" => "JENIS"
            ],
            "READING" => "BACAAN",
            "READING" => [
                "Device Reading Values" => "Bacaan Nilai Peranti",
                "Temperature" => "Suhu",
                "Ambient Temperature" => "Suhu Sekitar",
                "Humidity" => "Kelembaban "
            ],
            "ALERT" => "PERHATIAN",
            "ALERT" => [
                "Surrounding temperature level too low detected by" => "Level suhu sekitar terlalu rendah dikesan oleh" ,
                "Water temperature level too low detected" => "Tahap suhu air terlalu rendah dikesan",
                "Surrounding temperature level too high detected by" => "Tahap suhu sekeliling terlalu tinggi dikesan oleh",
                "Water tempereature level too high detected" => "Tahap suhu air terlalu tinggi dikesan",

            ],
            "SUGGESTED ACTION" => "TINDAKAN YANG DICADANGKAN"
        ],
        // Div
        "Plots need attention" => "Plot yang memerlukan perhatian",
        // Card 
        "PLOT" => "PLOT",
        "PLOT" => [
            "TOTAL ALERT" => "JUMLAH PERHATIAN",
            "ACTIVE DEVICE" => "PERANTI AKTIF",
            "SUGGESTED ACTION" => "TINDAKAN YANG DICADANGKAN",
            // Button
            "Reading" => "Bacaan",
            "Reading" =>  [
                "Reading for" => "Bacaan untuk",
                "Device Reading Values" => "Bacaan Nilai Peranti",
                "Temperature" => "Suhu",
                "Ph" => "Ph",
                "Close" => "Tutup"
            ],
            // Button
            "Details" => "Perincian",
            "Details" => [
                // Redirect to .../smart-tani-pineapple/plots/8
                //Card
                "LOCATION" => "LOKASI",
                //Card
                "INFORMATION" => "MAKLUMAT",
                "INFORMATION" => [
                    "ALERT" => "PERHATIAN",
                    "ACTIVE DEVICE" => "PERANTI AKTIF",
                    "READING" => "BACAAN",
                    "SUGGESTED ACTION" => "TINDAKAN YANG DICADANGKAN",
                    //  Button
                    "Set Location" => "Tetapkan Lokasi",
                    "Set Location for" => "Tetapkan Lokasi untuk",
                    "Set Location" => [
                        "Submit" => "Hantar",
                        "Close" => "Tutup"
                    ]
                ],
                // Card
                "DEVICE" => "PERANTI",
                "DEVICE" => [
                    "ID" => "ID" ,
                    "NAME" => "NAMA" ,
                    "TYPE" => "JENIS"
                ],
                // Card 
                "READING" => "BACAAN",
                "READING" => [
                    "Device Reading Values" => "Bacaan Nilai Peranti",
                    "Ph" => "Ph",
                    "Temperature" => "Suhu"
                ],
                // Card
                "ALERT" => [
                    "Surrounding temperature level too low detected by" => "Tahap suhu sekeliling terlalu rendah dikesan oleh",
                    "Water temperature level too low detected" =>"Tahap suhu air terlalu rendah dikesan",
                    "Surrounding temperature level too high detected by" => "Tahap suhu sekeliling terlalu tinggi dikesan oleh",
                    "Water tempereature level too high detected" => "Tahap suhu air terlalu tinggi dikesan",
    
                ],
                "SUGGESTED ACTION" => "TINDAKAN YANG DICADANGKAN",
                // Card
                "SUGGESTED ACTION" => [
                    "Suggestion" => "Cadangan",
                    "Please apply some lime solution to increase pH alkalinity for plot 1" => "Sila gunakan 'lime solution' untuk meningkatkan kealkalian pH untuk petak 1"
                ]
            ],
        ],
        // Card
        "NOTIFICATION LIST" => "SENARAI NOTIFIKASI",
        "NOTIFICATION LIST" => [
            "Alert" => "Perhatian",
            "Surrounding temperature level too high" => "Tahap suhu sekeliling terlalu tinggi",
            "PH level too low" => "Tahap PH terlalu rendah",
            "Please apply some lime solution to increase pH alkalinity" => "Sila gunakan 'lime solution' untuk meningkatkan kealkalian pH",
            "Water temperature level too low" => "Tahap suhu air terlalu rendah" ,
            "Water temperature level too high" => "Tahap suhu air terlalu tinggi"
        ]
    ] ,
    "Farm" => "Ladang",
    "Farm" => [
        "FARM LAYOUT" => "SUSUN ATUR LADANG",
        "NOTIFICATION LIST" => "SENARAI NOTIFIKASI",
        "PLOT VISUAL" => "VISUAL PLOT",
        "PLOT VISUAL" => [
            "ID" => "ID",
            "PLOT NAME" => "NAMA PETAK",
            "DEVICE COUNT" => "JUMLAH PERANTI"
        ],
        "NOTIFICATION LIST" => "SENARAI NOTIFIKASI"
    ],
    "Plot" => [
        "FARM" => "LADANG",
        "FARM LAYOUT" => "SUSUN ATUR LADANG",
        "NOTIFICATION LIST" => "SENARAI NOTIFIKASI",
        "PLOT GRAPH" => [
            "PH" => "PH",
            "Temperature" => "Suhu",
            "Moisture" => "Kelembaban",
            "Nitrogen" => "Nitrogen",
            "Phosphorus" => "Phosphorus",
            "Potassium" => "Potassium"
        ],
        "PLOT DETAIL" => "BUTIRAN PETAK",
        "PLOT DETAIL" => [
            "ID" => "ID",
            "PLOT NAME" => "NAMA PLOT",
            "DEVICE COUNT" => "JUMLAH PERANTI",
            "PH" => "PH",
            "MOISTURE" => "KELEMBAPAN",
            "TEMPERATURE" => "SUHU",
            "DATE" => "TARIKH"
        ]
    ],
    "Device" => "Peranti",
    "Device" => [
        "Device List" => "Senarai Peranti",
        "ID" => "ID",
        "NAME(DEVICEID)" => "NAMA(IDPERANTI)",
        "CUSTOMER" => "PELANGGAN",
        "PRODUCT" => "PRODUK",
        "ASSIGNED TO" => "DITUGASKAN PADA",
        "BATTERY LEVEL" => "HAYAT BATERI",
        "HEALTH" => "HAYAT",
        "LAST ACTIVE AT" => "WAKTU TERAKHIR AKTIF PADA"
    ] ,
    "Device Raw Reading List" => "Senarai Bacaan Nilai Peranti",
    "Device Raw Reading List"=>[
        "Device" => "Peranti",
        "ID" => "ID",
        "DEVICE" => "PERANTI",
        "HEADER" => "JUDUL",
        "PAYLOAD" => "MUATAN",
        "TRANSLATED" => "DITERJEMAH"

    ],
    "Map" => "Peta",
    "Report" => "Laporan",
    "Report" => [
        "Sensors report by device" => "Laporan sensor oleh peranti",
        "Download Report - Excel" => "Muat Turun Laporan - excel"
    ],
    "Operation Management" => "Pengurusan Operasi",
    "Operation Management" => [
        "My Task" => [
            "My Task" => "Tugas Saya",
            "ID" => "ID",
            "NAME" => "NAMA",
            "DURATION" => "DURASI",
            "DESCRIPTION" => "PENERANGAN",
            "DATE" => "TARIKH",
            "STATUS" => "STATUS",
            "ACTION" => "TINDAKAN",
            // ADD BUTTON
            "Create Task" => [
                "Create Task" => "Buat Tugas",
                "Create a new task" => "Buat tugas baru",
                "NEW TASK" => "TUGAS BARU",
                "Task name" => "Nama tugas",
                "Duration" => "Durasi",
                "Task description" => "Penerangan tugas",
                "Date" => "Tarikh",
                "Status" => "Status",
                "Cancel" => "Batal"
            ]
        ] ,
        "Inventory" => "Inventori",
        "Inventory" => [
            "ID" => "ID",
            "NAME" => "NAMA",
            "TYPE" => "JENIS",
            "DESCRIPTION" => "PENERANGAN",
            "DATE END" => "TARIKH BERAKHIR",
            "PRICE PER UNIT" => "HARGA PER UNIT",
            "STATUS" => "STATUS",
            "ACTION" => "TINDAKAN",
            // BUTTON
            "ADD INVENTORY" => "TAMBAH INVENTORI",
            "ADD INVENTORY" => [
                "INVENTORY" => "INVENTORI",
                "Create a new inventory" => "Buat inventori baru",
                "Item Name" => "Nama item",
                "Type" => "Jenis",
                "Item description" => "Penerangan item",
                "Date end" => "Tarikh akhir",
                "Price per Unit" => "Harga per unit",
                "Status" => "Status",
                "Create Inventory" => "Buat inventori",
                "Cancel" => "Batal"
            ]
        ] ,
        "Reporting" => "Laporan",
        "Reporting" => [
            
            // CARD
            "HARVESTING REPORT" => "LAPORAN TUAIAN",
            "HARVESTING REPORT" => [
                "Plot" => "Plot",
                "Date from" => "Tarikh mula",
                "Date end" => "Tarikh akhir",
                "Hormone" => "Hormon",
                "Est. No. of Crop" => "Anggaran jumlah tanaman"
            ],

            "GENERATE" => "HASILKAN",
            "DOWNLOAD" => "MUAT TURUN",
            "ITEM" => "ITEM",
            "CROP'S GRADE" => "GRED TANAMAN",
            "TTL CROP" => "JUMLAH TANAMAN",
            "TTL CROP COUNT" => "JUMLAH BILANGAN TANAMAN",
            "TTL KG PER GRADE" => "JUMLAH KG PER GRED",
            "CROP PRICE PER KG" => "HARGA TANAMAN PER KG",
            "TTL SALES PER GRADE" => "JUMLAH JUALAN PER GRED",
            "TTL GRAND SALES" => "JUMLAH JUALAN BESAR"
        ] ,
        "Operation Input" => "Input operasi",
        "Operation Input" => [
            "HORMONE" => "HORMON",
            "ID" => "ID",
            "DATE OF HORMONE" => "TARIKH HORMON",
            "PLOT" => "PLOT",
            "BOUNDARY" => "BATAS",
            "ESTIMATE CROP COUNT" => "ANGGARAN TANAMAN ANGGARAN",
            "DATE OF HARVESTED" => "TANGGAL PANEN",
            "REMARK" => "CATATAN",
            "ACTION" => "TINDAKAN",
            "OUTPUT" => "KELUARAN",
            "CROP'S OUTPUT" => "PANGKAS HASIL",
            "DATE CREATED" => "TANGGAL DICIPTAKAN",
            "PLOT" => "PETAK",
            "NEW HORMONE" => "HORMON BARU",
            "Create a new hormone" => "Buat hormon baru",
            "Date of hormone" => "Tarikh hormon",
            "Boundary" => "Batas",
            "Est. Crop Count" =>  "Anggaran Jumlah Tanaman",
            "Date Of Harvested" => "Tarikh Dituai",
            "Remark" => "Catatan" ,
            "Create Hormone" => "Buat Hormon",
            "Cancel" => "Batal",
            "NEW OUTPUT" => "PENGELUARAN BARU",
            "Create a new output" => "Buat pengeluaran baru",
            "Select plot" => "Pilih petak",
            "Create output" => "Buat pengeluaran",
            "SALES" => "JUALAN",
            "RESELLER" => "PENJUAL",
            "DATE OF SALES" => "TARIKH PENJUALAN",
            "CROP'S GRADE" => "GRED TANAMAN",
            "REMARK" => "CATATAN",
            "ACTION" => "TINDAKAN",
            "NEW SALE" => "JUALAN BARU",
            "Date of sales" => "Tarikh penjualan",
            "Crop's Grade" => "Gred tanaman",
            "Payment method" => "Kaedah pembayaran",
            "Create sale" => "Buat jualan",
            "PAYMENT METHOD" => "KAEDAH PEMBAYARAN",
            "AMOUNT PAID(RM)" => "AMAUN YANG DIBAYAR(RM)",
            "TOTAL PAID(RM)" => "JUMLAH BAYARAN"
        ]
    ] ,
    "Feedback" => "Maklum balas",
    "Logout" => "Keluar"
];

