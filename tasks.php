public function tasks()

{
    Schema::create('tasks', function (Blueprint $table)
        {
        $table->id();
        $table->description();
        $table->string('name');
        $table->string('status_id')->unique();
        $table->timestamps();
        });
}
