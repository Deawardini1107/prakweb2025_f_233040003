public function definition()
{
    return [
        'title' => fake()->sentence(),
        'body' => fake()->paragraph(),
        'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
    ];
}
