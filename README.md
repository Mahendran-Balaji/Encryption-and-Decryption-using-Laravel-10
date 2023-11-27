## Encryption and Decryption in Laravel 10

Laravel can encrypt it in Eloquent Models by simply casting it as encrypted.

We don't want our user sensitive information (This example used Bank Account Number) stored in plain text in our database, so encryption is a great way to protect it.

## Setup Encrypt and Decrypt in Model

In our model, we need to add the protected $casts property and the column we want to encrypt. In our case, it is bank_account_number:

```php
protected $casts = [
'bank_account_number' => 'encrypted',
];
```
Now, whenever you save the Bank Account Number on your user model - it will be encrypted, and on retrieval, it will get decrypted.

## Warning

- The encryption algorithm mentioned above is based on your application's APP_KEY value.So  you must keep your APP_KEY safe.
- If you change your APP_KEY - all your encrypted data will be lost. because this key is used for the encryption/decryption.

## DO NOT RUN key:generate ON PRODUCTION SERVER.
