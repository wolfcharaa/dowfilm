<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * @return void
     */
    public function up()
    {
        Schema::create("genres", function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        $genres = [
            "Аниме",
            "Боевик",
            "Военный",
            "Детектив",
            "Документальный",
            "Драма",
            "История",
            "Кинокомикс",
            "Комедия",
            "Короткометражный",
            "Криминал",
            "Мелодрама",
            "Мистика",
            "Мультфильм",
            "Мюзикл",
            "Научный",
            "Нуар",
            "Приключения",
            "Семейный",
            "Спорт",
            "Триллер",
            "Ужасы",
            "Фантастика",
            "Фэнтези",
        ];
        foreach ($genres as $genre) {
            DB::table('genres')->insert(["name" => $genre]);
        }

        Schema::create("countries", function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        $countries = [
          "Россия",
          "Франция",
          "Великобритания",
          "Италия",
          "Германия",
          "Канада",
          "Индия",
          "Япония",
          "Испания",
          "Гонконг",
          "Южная Корея",
          "Китай",
          "Бельгия",
          "Австралия",
          "Швеция",
          "Польша",
          "Дания",
          "Мексика",
          "Чехия",
          "Нидерланды",
          "Украина",
          "Ирландия",
          "Норвегия",
          "Швейцария",
          "Аргетина",
          "Венгрия",
          "Австрия",
          "Румыния",
        ];

        foreach ($countries as $country) {
            DB::table('countries')->insert(["name" => $country]);
        }

        Schema::create("producers", function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
        });

        Schema::create("actors", function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
        });

        Schema::create("pictures", function (Blueprint $table) {
            $table->id();
            $table->string('high');
            $table->string('low');
        });

        Schema::create("films", function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->default('');
            $table->string('original_name')->default('');
            $table->float('star')->default(0.0);
            $table->float('kinopoisk_rate')->default(0.0);
            $table->float('imbd_rate')->default(0.0);
            $table->integer('year');
            $table->foreignId('picture_id')->nullable();
            $table->integer('long')->nullable();
            $table->date('premiere');
            $table->string('download_link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create("comments", function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->constrained();
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create("film_genre", function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->constrained();
            $table->foreignId('genre_id')->constrained();
        });

        Schema::create("film_country", function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->constrained();
            $table->foreignId('country_id') ->constrained();
        });

        Schema::create("film_producer", function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->constrained();
            $table->foreignId('producer_id')->constrained();
        });

        Schema::create("film_actor", function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->constrained();
            $table->foreignId('actor_id')->constrained();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("film_actor");
        Schema::dropIfExists("film_producer");
        Schema::dropIfExists("film_country");
        Schema::dropIfExists("film_genre");
        Schema::dropIfExists("comments");
        Schema::dropIfExists("films");
        Schema::dropIfExists("pictures");
        Schema::dropIfExists("actors");
        Schema::dropIfExists("producers");
        Schema::dropIfExists("countries");
        Schema::dropIfExists("genres");
    }
};
