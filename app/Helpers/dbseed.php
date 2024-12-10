<?php

function dbRoles()
{
    return ['Admin', 'Customer'];
}

function dbStates()
{
    return [
        'Andhra Pradesh',
        'Arunachal Pradesh',
        'Assam',
        'Bihar',
        'Chhattisgarh',
        'Goa',
        'Gujarat',
        'Haryana',
        'Himachal Pradesh',
        'Jharkhand',
        'Karnataka',
        'Kerala',
        'Madhya Pradesh',
        'Maharashtra',
        'Manipur',
        'Meghalaya',
        'Mizoram',
        'Nagaland',
        'Odisha',
        'Punjab',
        'Rajasthan',
        'Sikkim',
        'Tamil Nadu',
        'Telangana',
        'Tripura',
        'Uttar Pradesh',
        'Uttarakhand',
        'West Bengal',
        'Andaman and Nicobar Islands',
        'Chandigarh',
        'Dadra and Nagar Haveli and Daman and Diu',
        'Delhi',
        'Jammu and Kashmir',
        'Ladakh',
        'Lakshadweep',
        'Puducherry'
    ];
}

function dbSizes()
{
    return [
        ['name' => 'S', 'description' => 'Small Size'],
        ['name' => 'M', 'description' => 'Medium Size'],
        ['name' => 'L', 'description' => 'Large Size'],
        ['name' => 'XL', 'description' => 'Extra Large Size'],
    ];
}

function dbColors()
{
    return [
        ['name' => 'Red', 'hex_code' => '#ff0000'],
        ['name' => 'Green', 'hex_code' => '#00ff00'],
        ['name' => 'Blue', 'hex_code' => '#0000ff'],
    ];
}

function dbCategories()
{
    return [
        ['name' => 'T-Shirt', 'slug' => 't-shirt', 'status' => true],
        ['name' => 'Jean', 'slug' => 'jean', 'status' => true],
        ['name' => 'Jacket', 'slug' => 'jacket', 'status' => true],
        ['name' => 'Saree', 'slug' => 'saree', 'status' => true],
    ];
}