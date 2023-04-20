public function user_tasks()

{
    Schema::create('user_tasks', function (Blueprint $table)
        {
        $table->id();
        $table->user_id();
	$table->task_id();
        $table->string('remarks');
        $table->string('status_id')->unique();
        $table->timestamps();
        });
}
