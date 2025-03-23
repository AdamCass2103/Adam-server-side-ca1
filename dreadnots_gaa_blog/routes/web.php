use App\Http\Controllers\PostController;
use App\Http\Controllers\PlayerController;

Route::resource('posts', PostController::class);
Route::resource('players', PlayerController::class);
