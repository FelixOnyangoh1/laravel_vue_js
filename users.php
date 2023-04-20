public function users()

{
    Schema::create('users', function (Blueprint $table)
	{
        $table->id();
	$table->password();
        $table->string('name');
        $table->string('email_address')->unique();
        $table->timestamps();
	});
}

