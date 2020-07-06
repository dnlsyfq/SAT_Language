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
    "Map" => "Map",
    "Report" => "Laporan",
    "Report" => [
        "Sensors report by device" => "Laporan sensor oleh perangkat",
        "Download Report - Excel" => "Unduh Laporan - excel"
    ],
    "Operation Management" => "Manajemen operasional",
    "Operation Management" => [
        "My Task" => [
            "My Task" => "Tugasku",
            "ID" => "ID",
            "NAME" => "NAMA",
            "DURATION" => "DURASI",
            "DESCRIPTION" => "DESKRIPSI",
            "DATE" => "TANGGAL",
            "STATUS" => "STATUS",
            "ACTION" => "TINDAKAN",
            // ADD BUTTON
            "Create Task" => [
                "Create Task" => "Buat Tugas",
                "Create a new task" => "Buat tugas baru",
                "NEW TASK" => "NAMA TUGAS",
                "Task name" => "Task name",
                "Duration" => "Durasi",
                "Task description" => "Deskripsi tugas",
                "Date" => "Tanggal",
                "Status" => "Status"
                "Cancel" => "Batal"
            ]
        ] ,
        "Inventory" => "Inventory",
        "Inventory" => [
            "ID" => "ID",
            "NAME" => "NAMa",
            "TYPE" => "TIPE",
            "DESCRIPTION" => "DESKRIPSI",
            "DATE END" => "TANGGAL BERAKHIR",
            "PRICE PER UNIT" => "HARGA PER UNIT",
            "STATUS" => "STATUS",
            "ACTION" => "TINDAKAN",
            // BUTTON
            "ADD INVENTORY" => "TAMBAHKAN INVENTARIS",
            "ADD INVENTORY" => [
                "INVENTORY" => "INVENTARIS",
                "Create a new inventory" => "Buat inventaris baru",
                "Item Name" => "Nama item",
                "Type" => "Tipe",
                "Item description" => "Deskripsi barang",
                "Date end" => "Tanggal berakhir",
                "Price per Unit" => "Harga per unit",
                "Status" => "Status",
                "Create Inventory" => "Buat inventaris",
                "Cancel" => "Batal"
            ]
        ] ,
        "Reporting" => "Laporan",
        "Reporting" => [
            
            // CARD
            "HARVESTING REPORT" => "LAPORAN PANEN",
            "HARVESTING REPORT" => [
                "Plot" => "Plot",
                "Date from" => "Tanggal mulai",
                "Date end" => "Tanggal berakhir",
                "Hormone" => "Hormon",
                "Est. No. of Crop" => "Estimasi jumlah tanaman"
            ],

            "GENERATE" => "HASILKAN",
            "DOWNLOAD" => "UNDUH",
            "ITEM" => "ITEM",
            "CROP'S GRADE" => "GRED TANAMAN",
            "TTL CROP" => "TOTAL PANEN",
            "TTL CROP COUNT" => "JUMLAH TOTAL PANEN",
            "TTL KG PER GRADE" => "TOTAL KG PER GRED",
            "CROP PRICE PER KG" => "HARGA TANAMAN PER KG",
            "TTL SALES PER GRADE" => "TOTAL PENJUALAN PER GRED",
            "TTL GRAND SALES" => "TOTAL PENJUALAN BESAR"
        ] ,
        "Operation Input" => "Input operasi",
        "Operation Input" => [
            "HORMONE" => "HORMON",
            "ID" => "ID",
            "DATE OF HORMONE" => "TANGGAL HORMON",
            "PLOT" => "PLOT",
            "BOUNDARY" => "BATAS",
            "ESTIMATE CROP COUNT" => "ESTIMASI JUMLAH TANAMAN",
            "DATE OF HARVESTED" => "TANGGAL PANEN",
            "REMARK" => "CATATAN",
            "ACTION" => "TINDAKAN",
            "OUTPUT" => "KELUARAN",
            "CROP'S OUTPUT" => "PANGKAS HASIL",
            "DATE CREATED" => "TANGGAL DICIPTAKAN",
            "PLOT" => "PLOT",
            "CROP'S GRADE" => "GRED TANAMAN",
            "NEW HORMONE" => "HORMON BARU",
            "Create a new hormone" => "BUAT HORMON BARU",
            "Date of hormone" => "Tanggal hormon",
            "Boundary" => "Batas",
            "Est. Crop Count" =>  "Estimasi Jumlah tanaman",
            "Date Of Harvested" => "Tanggal Panen",
            "Remark" => "Catatan" ,
            "Create Hormone" => "Buat Hormon",
            "Cancel" => "Batal",
            "NEW OUTPUT" => "PENGELUARAN BARU",
            "Create a new output" => "Buat pengeluaran baru",
            "Select plot" => "Pilih plot",
            "Create output" => "Buat pengeluaran",
            "SALES" => "Penjualan",
            "RESELLER" => "Pengecer",
            "DATE OF SALES" => "TANGGAL PENJUALAN",
            "CROP'S GRADE" => "GRED TANAMAN",
            "PAYMENT METHOD" => "CARA PEMBAYARAN",
            "REMARK" => "CATATAN",
            "ACTION" => "TINDAKAN",
            "NEW SALE" => "PENJUALAN BARU",
            "Date of sales" => "Tanggal penjualan",
            "Crop's Grade" => "Grede tanaman",
            "Payment method" => "Cara pembayaran",
            "Create sale" => "Buat penjualan baru",
            "PAYMENT METHOD" => "CARA PEMBAYARAN",
            "AMOUNT PAID(RM)" => "JUMLAH YANG DIBAYARKAN",
            "TOTAL PAID(RM)" => "TOTAL YANG DIBAYARKAN"
        ]
    ] ,
    "Feedback" => "Formulir Umpan BSalik",
    "Logout" => "Keluar"
];

