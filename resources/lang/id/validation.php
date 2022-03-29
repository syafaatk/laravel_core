<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute harus dipilih.',
    'active_url' => ':attribute bukan URL yg valid.',
    'after' => ':attribute harus sesudah tanggal :date.',
    'after_or_equal' => ':attribute harus setelah atau sama dengan tanggal :date.',
    'alpha' => ':attribute hanya mengdanung huruf.',
    'alpha_dash' => ':attribute hanya mengdanung huruf, angka, strip dan garis bawah.',
    'alpha_num' => ':attribute hanya mengdanung huruf dan angka.',
    'array' => ':attribute harus array.',
    'before' => ':attribute harus sebelum tanggal :date.',
    'before_or_equal' => ':attribute harus sebelum tanggal atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute harus antara :min dan :max.',
        'file' => ':attribute harus antara :min dan :max kilobyte.',
        'string' => ':attribute harus antara :min dan :max karakter.',
        'array' => ':attribute harus di antara :min dan :max.',
    ],
    'boolean' => ':attribute harus bernilai true atau false.',
    'confirmed' => ':attribute tidak sama.',
    'date' => ':attribute bukan format tanggal yg valid.',
    'date_equals' => ':attribute harus sama dengan :date.',
    'date_format' => ':attribute tidak sama dengan format :format.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus :digits digit.',
    'digits_between' => ':attribute harus antara :min dan :max digit.',
    'dimensions' => ':attribute tidak memiliki dimensi gambar yg valid.',
    'distinct' => ':attribute memiliki nilai ganda/sama.',
    'email' => ':attribute harus merupakan email address yang valid.',
    'ends_with' => ':attribute harus diakhiri dengan salah satu dari berikut ini: :values.',
    'exists' => ':attribute yang dipilih tidak valid.',
    'file' => ':attribute harus file.',
    'filled' => ':attribute harus memiliki nilai.',
    'gt' => [
        'numeric' => ':attribute harus lebih besar dari :value.',
        'file' => ':attribute harus lebih besar dari :value kilobyte.',
        'string' => ':attribute harus lebih besar dari :value karakter.',
        'array' => ':attribute harus memiliki lebih dari :value.',
    ],
    'gte' => [
        'numeric' => ':attribute harus lebih besar dari atau sama dengan :value.',
        'file' => ':attribute harus lebih besar dari atau sama dengan :value kilobyte.',
        'string' => ':attribute harus lebih besar dari atau sama dengan :value karakter.',
        'array' => ':attribute harus :value atau lebih.',
    ],
    'image' => ':attribute harus image.',
    'in' => 'The selected :attribute tidak valid.',
    'in_array' => ':attribute tidak ada di :other.',
    'integer' => ':attribute harus integer.',
    'ip' => ':attribute harus IP address yang valid.',
    'ipv4' => ':attribute harus IPv4 address yang valid.',
    'ipv6' => ':attribute harus IPv6 address yang valid.',
    'json' => ':attribute harus JSON string yang valid.',
    'lt' => [
        'numeric' => ':attribute harus kurang dari :value.',
        'file' => ':attribute harus kurang dari :value kilobyte.',
        'string' => ':attribute harus kurang dari :value karakter.',
        'array' => ':attribute harus kurang dari :value.',
    ],
    'lte' => [
        'numeric' => ':attribute harus kurang dari atau sama dengan :value.',
        'file' => ':attribute harus kurang dari atau sama dengan :value kilobyte.',
        'string' => ':attribute harus kurang dari atau sama dengan :value karakter.',
        'array' => ':attribute tidak boleh memiliki lebih dari :value.',
    ],
    'max' => [
        'numeric' => ':attribute mungkin tidak lebih besar dari :max.',
        'file' => ':attribute mungkin tidak lebih besar dari :max kilobyte.',
        'string' => ':attribute mungkin tidak lebih besar dari :max karakter.',
        'array' => ':attribute mungkin tidak memiliki lebih dari :max.',
    ],
    'mimes' => ':attribute harus tipe file berikut: :values.',
    'mimetypes' => ':attribute harus tipe file berikut: :values.',
    'min' => [
        'numeric' => ':attribute paling tidak harus :min.',
        'file' => ':attribute paling tidak harus :min kilobyte.',
        'string' => ':attribute paling tidak harus :min karakter.',
        'array' => ':attribute paling tidak harus :min.',
    ],
    'not_in' => ':attribute yg dipilih tidak valid.',
    'not_regex' => ':attribute format tidak valid.',
    'numeric' => ':attribute harus number.',
    'password' => 'Password tidak sesuai.',
    'present' => ':attribute harus ada.',
    'regex' => ':attribute format tidak valid.',
    'required' => ':attribute Harus Diisi.',
    'required_if' => ':attribute harus di isi ketika :other merupakan :value.',
    'required_unless' => ':attribute harus di isi kecuali ketika :other ada di :values.',
    'required_with' => ':attribute harus di isi ketika :values harus ada.',
    'required_with_all' => ':attribute harus di isi ketika :values harus ada.',
    'required_without' => ':attribute harus di isi ketika :values tidak ada.',
    'required_without_all' => ':attribute harus di isi ketika tidak ada :values yg diisi.',
    'same' => ':attribute dan :other harus sama.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size kilobyte.',
        'string' => ':attribute harus :size karakter.',
        'array' => ':attribute harus mengandung :size.',
    ],
    'starts_with' => ':attribute harus dimulai dengan salah satu dari berikut ini: :values.',
    'string' => ':attribute harus string.',
    'timezone' => ':attribute harus valid zone.',
    'unique' => ':attribute sudah digunakan.',
    'uploaded' => ':attribute gagal di upload.',
    'url' => 'format :attribute tidak valid.',
    'uuid' => ':attribute harus valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'email' => 'Email',
        'email_verified_at' => 'Tanggal Email Terverifikasi',
        'master_brand_alias' => 'Inisial/Singkatan Brand',
        'master_brand_id' => 'ID Brand',
        'master_brand_name' => 'Nama Brand',
        'master_brand_status' => 'Status Brand',
        'master_city_alias' => 'Inisial/Singkatan Kota',
        'master_city_id' => 'ID Kota',
        'master_city_name' => 'Nama Kota',
        'master_city_status' => 'Status Kota',
        'master_item_file' => 'Gambar Item / Barang',
        'master_item_id' => 'Id Barang',
        'master_item_name' => 'Nama Barang',
        'master_item_price' => 'Harga Barang',
        'master_item_price_last_update' => 'Update Terakhir Harga Jual',
        'master_item_stock' => 'Stok Barang',
        'master_item_stock_minimum' => 'Stok Minimum',
        'master_supplier_address' => 'Alamat Supplier',
        'master_supplier_category_alias' => 'Kategori Supplier Alias',
        'master_supplier_category_id' => 'Id Kategori Supplier',
        'master_supplier_category_name' => 'Nama Kategori Supplier',
        'master_supplier_category_status' => 'Status Kategori Supplier',
        'master_supplier_date_of_reg' => 'Tanggal Terdaftar Supplier',
        'master_supplier_email' => 'Email Supplier',
        'master_supplier_id' => 'Id Supplier',
        'master_supplier_name' => 'Nama Supplier',
        'master_supplier_phone_mobile' => 'No HP Supplier',
        'master_supplier_phone_office' => 'No Kantor Supplier',
        'master_supplier_pic' => 'PIC Supplier',
        'master_supplier_section' => 'Bagian Supplier',
        'master_unit_alias' => 'Inisial/Singkatan satuan',
        'master_unit_id' => 'Id Satuan',
        'master_unit_name' => 'Nama satuan',
        'master_unit_status' => 'Status Satuan',
        'name' => 'Nama',
        'password' => 'Kata Sandi',
        'remember_token' => 'Ingat Saya',
    ],

];
