public function status()

{
    Schema::create('status', function (Blueprint $table)
        {
        $table->id();
        $table->string('name');
        $table->timestamps();
        });
}
