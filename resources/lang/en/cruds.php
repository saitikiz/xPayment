<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'client'                   => 'Client',
            'client_helper'            => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'payer' => [
        'title'          => 'Payer',
        'title_singular' => 'Payer',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'first_name'          => 'First Name',
            'first_name_helper'   => ' ',
            'last_name'           => 'Last Name',
            'last_name_helper'    => ' ',
            'sumsub_token'        => 'Sumsub Token',
            'sumsub_token_helper' => ' ',
            'phone'               => 'Phone',
            'phone_helper'        => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'email'               => 'Email',
            'email_helper'        => ' ',
        ],
    ],
    'paymentMethod' => [
        'title'          => 'Payment Method',
        'title_singular' => 'Payment Method',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'client' => [
        'title'          => 'Client',
        'title_singular' => 'Client',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'clientManagement' => [
        'title'          => 'Client Management',
        'title_singular' => 'Client Management',
    ],
    'clientPaymentMethod' => [
        'title'          => 'Client Payment Method',
        'title_singular' => 'Client Payment Method',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'client'                => 'Client',
            'client_helper'         => ' ',
            'payment_method'        => 'Payment Method',
            'payment_method_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
        ],
    ],
    'clientSite' => [
        'title'          => 'Client Site',
        'title_singular' => 'Client Site',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'domain'                => 'Domain',
            'domain_helper'         => ' ',
            'client'                => 'Client',
            'client_helper'         => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'payment_method'        => 'Payment Method',
            'payment_method_helper' => ' ',
        ],
    ],
    'clientSiteToken' => [
        'title'          => 'Client Site Token',
        'title_singular' => 'Client Site Token',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'token'              => 'Token',
            'token_helper'       => ' ',
            'expires_at'         => 'Expires At',
            'expires_at_helper'  => ' ',
            'is_active'          => 'Is Active',
            'is_active_helper'   => ' ',
            'client_site'        => 'Client Site',
            'client_site_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'payerManagement' => [
        'title'          => 'Payer Management',
        'title_singular' => 'Payer Management',
    ],
    'transactionx' => [
        'title'          => 'Transactionx',
        'title_singular' => 'Transactionx',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'type'                   => 'Type',
            'type_helper'            => ' ',
            'amount'                 => 'Amount',
            'amount_helper'          => ' ',
            'commission_rate'        => 'Commission Rate',
            'commission_rate_helper' => ' ',
            'commission'             => 'Commission',
            'commission_helper'      => ' ',
            'amount_net'             => 'Amount Net',
            'amount_net_helper'      => ' ',
            'date'                   => 'Date',
            'date_helper'            => ' ',
            'payer'                  => 'Payer',
            'payer_helper'           => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'payment_method'         => 'Payment Method',
            'payment_method_helper'  => ' ',
            'site'                   => 'Site',
            'site_helper'            => ' ',
            'client'                 => 'Client',
            'client_helper'          => ' ',
        ],
    ],
    'payerSite' => [
        'title'          => 'Payer Site',
        'title_singular' => 'Payer Site',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'currency_code'             => 'Currency Code',
            'currency_code_helper'      => ' ',
            'wallet_address'            => 'Wallet Address',
            'wallet_address_helper'     => ' ',
            'base_currency_code'        => 'Base Currency Code',
            'base_currency_code_helper' => ' ',
            'email'                     => 'Email',
            'email_helper'              => ' ',
            'phone'                     => 'Phone',
            'phone_helper'              => ' ',
            'customer_kyc'              => 'Customer Kyc',
            'customer_kyc_helper'       => ' ',
            'external_customer'         => 'External Customer',
            'external_customer_helper'  => ' ',
            'response_url'              => 'Response Url',
            'response_url_helper'       => ' ',
            'payer'                     => 'Payer',
            'payer_helper'              => ' ',
            'site'                      => 'Site',
            'site_helper'               => ' ',
            'payment_method'            => 'Payment Method',
            'payment_method_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
        ],
    ],

];
