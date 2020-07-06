<?php

return [
    // Page & Sidenav
    "Dashboard" => "Papan instrumen",
    // Page
    "Dashboard" => [ 
        // Card
        "FARM"=>"TANAH PERTANIAN", 
        // Card
        "WEATHER REPORT"=>"LAPORAN CUACA",
        // Card
        "Farm" => "Tanah pertanian",
        "Farm"=>[
            "ALERT" =>"PERINGATAN", 
            "ACTIVE DEVICE" => "PERANGKAT AKTIF",
            "SUGGESTED ACTION" => "TINDAKAN SARANAN"
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
        "Farm Details" => "Perincian Tanah pertanian",
        "Farm Details" => [
            // Redirect to .../smart-tani-pineapple/farms/7
            "LOCATION" => "LOKASI",
            "INFORMATION" => "INFORMASI",
            "INFORMATION" => [
                "ALERT" => "PERINGATAN",
                "ACTIVE DEVICE" => "PERANGKAT AKTIF",
                "READING" => "  BACAAN",
                "SUGGESTED ACTION" => "TINDAKAN SARANAN"
            ],
            "DEVICE" => "PERANGKAT",
            "DEVICE" => [
                "ID" => "ID",
                "NAME" => "NAMA",
                "TYPE" => "TIPE"
            ],
            "READING" => "BACAAN",
            "READING" => [
                "Device Reading Values" => "Bacaan Nilai Perangkat",
                "Temperature" => "Suhu",
                "Ambient Temperature" => "Suhu Sekitar",
                "Humidity" => "Kelembaban "
            ],
            "ALERT" => "PERINGATAN",
            "ALERT" => [
                "Surrounding temperature level too low detected by" => "Level suhu sekitar terlalu rendah terdeteksi oleh" ,
                "Water temperature level too low detected" => "Tingkat suhu air terdeteksi terlalu rendah",
                "Surrounding temperature level too high detected by" => "Level suhu sekitar terlalu tinggi terdeteksi oleh",
                "Water tempereature level too high detected" => "Tingkat suhu air terlalu tinggi terdeteksi",

            ],
            "SUGGESTED ACTION" => "TINDAKAN SARANAN"
        ],
        // Div
        "Plots need attention" => "Plot yang butuh perhatian",
        // Card 
        "PLOT" => "PLOT",
        "PLOT" => [
            "TOTAL ALERT" => "JUMLAH PERINGATAN",
            "ACTIVE DEVICE" => "PERINGKAT AKTIF",
            "SUGGESTED ACTION" => "TINDAKAN SARANAN",
            // Button
            "Reading" => "bacaan",
            "Reading" =>  [
                "Reading for" => "bacaan untuk",
                "Device Reading Values" => "Bacaan Nilai Perangkat",
                "Temperature" => "suhu",
                "Ph" => "Ph",
                "Close" => "menutup"
            ],
            // Button
            "Details" => "Perincian",
            "Details" => [
                // Redirect to .../smart-tani-pineapple/plots/8
                //Card
                "LOCATION" => "LOKASI",
                //Card
                "INFORMATION" => "INFORMASI",
                "INFORMATION" => [
                    "ALERT" => "PERINGATAN",
                    "ACTIVE DEVICE" => "PERANGKAT AKTIF",
                    "READING" => "BACAAN",
                    "SUGGESTED ACTION" => "TINDAKAN SARANAN",
                    //  Button
                    "Set Location" => "Atur Lokasi",
                    "Set Location for" => "Atur Lokasi untuk",
                    "Set Location" => [
                        "Submit" => "Kirimkan",
                        "Close" => "Menutup"
                    ]
                ],
                // Card
                "DEVICE" => "PERANGKAT",
                "DEVICE" => [
                    "ID" => "ID" ,
                    "NAME" => "NAMA" ,
                    "TYPE" => "TIPE"
                ],
                // Card 
                "READING" => "BACAAN",
                "READING" => [
                    "Device Reading Values" => "Nilai Bacaan Perangkat",
                    "Ph" => "Ph",
                    "Temperature" => "Temperature"
                ],
                // Card
                "ALERT" => [
                    "Surrounding temperature level too low detected by" => "Level suhu sekitar terlalu rendah terdeteksi oleh",
                    "Water temperature level too low detected" =>"
                    Tingkat suhu air terdeteksi terlalu rendah",
                    "Surrounding temperature level too high detected by" => "
                    Level suhu sekitar terlalu tinggi terdeteksi oleh",
                    "Water tempereature level too high detected" => "
                    Tingkat suhu air terlalu tinggi terdeteksi",
    
                ],
                "SUGGESTED ACTION" => "TINDAKAN SARANAN",
                // Card
                "SUGGESTED ACTION" => [
                    "Suggestion" => "Saran",
                    "Please apply some lime solution to increase pH alkalinity for plot 1" => "Please apply some lime solution to increase pH alkalinity for plot 1"
                ]
            ],
        ],
        // Card
        "NOTIFICATION LIST" => "Daftar pemberitahuan",
        "NOTIFICATION LIST" => [
            "Alert" => "Peringatan",
            "Surrounding temperature level too high" => "Surrounding temperature level too high",
            "PH level too low" => "PH level too low",
            "Please apply some lime solution to increase pH alkalinity" => "Please apply some lime solution to increase pH alkalinity",
            "Water temperature level too low" => "Water temperature level too low" ,
            "Water temperature level too high" => "Water temperature level too high"
        ]
    ] ,
    "Farm" => "Tanah pertanian",
    "Farm" => [
        "FARM LAYOUT" => "SUSUNAN TANAH PERTANIAN",
        "NOTIFICATION LIST" => "DAFTAR PEMBERITAHUAN",
        "PLOT VISUAL" => "PLOT VISUAL",
        "PLOT VISUAL" => [
            "ID" => "ID",
            "PLOT NAME" => "NAMA PLOT",
            "DEVICE COUNT" => "TOTAL PERANGKAT"
        ],
        "NOTIFICATION LIST" => "DAFTAR PEMBERITAHUAN"
    ],
    "Plot" => [
        "FARM" => "TANAH PERTANIAN",
        "FARM LAYOUT" => "SUSUNAN TANAH PERTANIAN",
        "NOTIFICATION LIST" => "DAFTAR PEMBERITAHUAN",
        "PLOT GRAPH" => [
            "PH" => "PH",
            "Temperature" => "Suhu",
            "Moisture" => "Kelembaban",
            "Nitrogen" => "Nitrogen",
            "Phosphorus" => "Phosphorus",
            "Potassium" => "Potassium"
        ],
        "PLOT DETAIL" => "PLOT DETAIL",
        "PLOT DETAIL" => [
            "ID" => "ID",
            "PLOT NAME" => "NAMA PLOT",
            "DEVICE COUNT" => "TOTAL PERANGKAT",
            "PH" => "PH",
            "MOISTURE" => "KELEMBAPAN",
            "TEMPERATURE" => "SUHU",
            "DATE" => "TANGGAL"
        ]
    ],
    "Device" => "perangkat",
    "Device" => [
        "Device List" => "Daftar perangkat",
        "ID" => "ID",
        "NAME(DEVICEID)" => "NAMA(IDPERANGKAT)",
        "CUSTOMER" => "CUSTOMER",
        "PRODUCT" => "PELANGGAN",
        "ASSIGNED TO" => "DITUGASKAN UNTUK",
        "BATTERY LEVEL" => "TINGKAT BATERAI",
        "HEALTH" => "KESEHATAN BATERAI",
        "LAST ACTIVE AT" => "AKTIF TERAKHIR DI"
    ] ,
    "Device Raw Reading List" => "Daftar Bacaan Nilai Perangkat",
    "Device Raw Reading List"=>[
        "Device" => "perangkat",
        "ID" => "ID",
        "DEVICE" => "perangkat",
        "HEADER" => "tajuk",
        "PAYLOAD" => "muatan",
        "TRANSLATED" => "TERJEMAHAN"

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
                "Status" => "Status",
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

