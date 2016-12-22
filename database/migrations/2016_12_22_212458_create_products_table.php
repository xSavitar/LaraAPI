<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('Category', 200);
			$table->text('ProductName', 65535)->nullable();
			$table->text('ProductLink', 65535)->nullable();
			$table->text('ImageUrl', 65535)->nullable();
			$table->float('UnitPrice')->nullable();
			$table->integer('UnitSold')->nullable();
			$table->dateTime('StartDate')->nullable();
			$table->dateTime('EndDate')->nullable();
			$table->float('Revenue', 10)->nullable();
			$table->string('Company', 45)->nullable()->default('Groupon Australia');
			$table->string('Country', 45)->nullable()->default('Australia');
			$table->string('Status', 10)->nullable();
			$table->string('merchant');
			$table->integer('last_fixed')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
