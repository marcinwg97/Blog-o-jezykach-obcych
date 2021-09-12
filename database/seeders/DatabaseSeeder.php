<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
    DB::table('users')->insert([
        'id' => 1,
        'name' => "Student",
        'email'  => "student@student.pl",  
        'password' => bcrypt("Student123!"),
    ]);    
    DB::table('categories')->insert([
        'id' => 1,
        'name'  => "Język angielski",   
    ]);
    DB::table('categories')->insert([
        'id' => 2,
        'name'  => "Język niemiecki", 
    ]);
    DB::table('categories')->insert([
        'id' => 3,
        'name'  => "Język hiszpański",
    ]);
    DB::table('posts')->insert([
        'id' => 1,
        'title'  => "Post 1",
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper neque ac odio pulvinar facilisis. Curabitur consectetur laoreet dolor non elementum. Suspendisse iaculis erat et porta sodales. Nullam ac nibh pulvinar diam tempus tincidunt quis sit amet nibh. Donec quis rhoncus risus. Curabitur sed ligula posuere, tristique arcu ut, rutrum mauris. Nulla pellentesque semper ipsum et lacinia. Vestibulum quis lacus nibh. Fusce dignissim euismod libero non aliquam. Praesent eget neque id mauris tempus condimentum mattis ut nunc. Cras aliquam sem ut felis tempor blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque faucibus sit amet massa quis lobortis.

        Proin malesuada malesuada neque, eu commodo augue tempus sed. Donec ornare metus eu commodo congue. Mauris quis nunc eleifend, condimentum justo vel, lobortis tellus. Vivamus lectus nibh, convallis ut dictum a, eleifend id ligula. Nulla ac tincidunt lorem, vehicula semper dui. Cras nec mauris id purus suscipit tempor. Aliquam pulvinar arcu sit amet tincidunt vehicula. Duis justo purus, mattis nec efficitur et, feugiat in diam. Sed nec fermentum magna, sit amet finibus quam. Donec sem ligula, blandit a sapien eget, posuere luctus dui.
        
        Cras et eleifend eros. Quisque aliquam, massa at bibendum malesuada, arcu tortor tempor felis, et porttitor sem nisi at orci. Vivamus magna tortor, posuere cursus ultricies vel, accumsan non mi. In eu feugiat mauris. Nunc quis libero semper, maximus libero in, volutpat purus. Curabitur feugiat pellentesque sollicitudin. Aliquam in nisl scelerisque sem luctus molestie venenatis vitae nisl. Etiam sit amet risus vulputate, ultricies dui vitae, consequat urna.",
        'date' => "2021-01-06",
        'is_active' => 1,
        'category_id' => 1,
        'user_id' => 1,
    ]);
    DB::table('posts')->insert([
        'id' => 2,
        'title'  => "Post 2",
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper neque ac odio pulvinar facilisis. Curabitur consectetur laoreet dolor non elementum. Suspendisse iaculis erat et porta sodales. Nullam ac nibh pulvinar diam tempus tincidunt quis sit amet nibh. Donec quis rhoncus risus. Curabitur sed ligula posuere, tristique arcu ut, rutrum mauris. Nulla pellentesque semper ipsum et lacinia. Vestibulum quis lacus nibh. Fusce dignissim euismod libero non aliquam. Praesent eget neque id mauris tempus condimentum mattis ut nunc. Cras aliquam sem ut felis tempor blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque faucibus sit amet massa quis lobortis.

        Proin malesuada malesuada neque, eu commodo augue tempus sed. Donec ornare metus eu commodo congue. Mauris quis nunc eleifend, condimentum justo vel, lobortis tellus. Vivamus lectus nibh, convallis ut dictum a, eleifend id ligula. Nulla ac tincidunt lorem, vehicula semper dui. Cras nec mauris id purus suscipit tempor. Aliquam pulvinar arcu sit amet tincidunt vehicula. Duis justo purus, mattis nec efficitur et, feugiat in diam. Sed nec fermentum magna, sit amet finibus quam. Donec sem ligula, blandit a sapien eget, posuere luctus dui.
        
        Cras et eleifend eros. Quisque aliquam, massa at bibendum malesuada, arcu tortor tempor felis, et porttitor sem nisi at orci. Vivamus magna tortor, posuere cursus ultricies vel, accumsan non mi. In eu feugiat mauris. Nunc quis libero semper, maximus libero in, volutpat purus. Curabitur feugiat pellentesque sollicitudin. Aliquam in nisl scelerisque sem luctus molestie venenatis vitae nisl. Etiam sit amet risus vulputate, ultricies dui vitae, consequat urna.",
        'date' => "2021-01-06",
        'is_active' => 1,
        'category_id' => 1,
        'user_id' => 1,
    ]);
    DB::table('posts')->insert([
        'id' => 3,
        'title'  => "Post 3",
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper neque ac odio pulvinar facilisis. Curabitur consectetur laoreet dolor non elementum. Suspendisse iaculis erat et porta sodales. Nullam ac nibh pulvinar diam tempus tincidunt quis sit amet nibh. Donec quis rhoncus risus. Curabitur sed ligula posuere, tristique arcu ut, rutrum mauris. Nulla pellentesque semper ipsum et lacinia. Vestibulum quis lacus nibh. Fusce dignissim euismod libero non aliquam. Praesent eget neque id mauris tempus condimentum mattis ut nunc. Cras aliquam sem ut felis tempor blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque faucibus sit amet massa quis lobortis.

        Proin malesuada malesuada neque, eu commodo augue tempus sed. Donec ornare metus eu commodo congue. Mauris quis nunc eleifend, condimentum justo vel, lobortis tellus. Vivamus lectus nibh, convallis ut dictum a, eleifend id ligula. Nulla ac tincidunt lorem, vehicula semper dui. Cras nec mauris id purus suscipit tempor. Aliquam pulvinar arcu sit amet tincidunt vehicula. Duis justo purus, mattis nec efficitur et, feugiat in diam. Sed nec fermentum magna, sit amet finibus quam. Donec sem ligula, blandit a sapien eget, posuere luctus dui.
        
        Cras et eleifend eros. Quisque aliquam, massa at bibendum malesuada, arcu tortor tempor felis, et porttitor sem nisi at orci. Vivamus magna tortor, posuere cursus ultricies vel, accumsan non mi. In eu feugiat mauris. Nunc quis libero semper, maximus libero in, volutpat purus. Curabitur feugiat pellentesque sollicitudin. Aliquam in nisl scelerisque sem luctus molestie venenatis vitae nisl. Etiam sit amet risus vulputate, ultricies dui vitae, consequat urna.",
        'date' => "2021-01-06",
        'is_active' => 1,
        'category_id' => 1,
        'user_id' => 1,
    ]);
    DB::table('posts')->insert([
        'id' => 4,
        'title'  => "Post 4",
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper neque ac odio pulvinar facilisis. Curabitur consectetur laoreet dolor non elementum. Suspendisse iaculis erat et porta sodales. Nullam ac nibh pulvinar diam tempus tincidunt quis sit amet nibh. Donec quis rhoncus risus. Curabitur sed ligula posuere, tristique arcu ut, rutrum mauris. Nulla pellentesque semper ipsum et lacinia. Vestibulum quis lacus nibh. Fusce dignissim euismod libero non aliquam. Praesent eget neque id mauris tempus condimentum mattis ut nunc. Cras aliquam sem ut felis tempor blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque faucibus sit amet massa quis lobortis.

        Proin malesuada malesuada neque, eu commodo augue tempus sed. Donec ornare metus eu commodo congue. Mauris quis nunc eleifend, condimentum justo vel, lobortis tellus. Vivamus lectus nibh, convallis ut dictum a, eleifend id ligula. Nulla ac tincidunt lorem, vehicula semper dui. Cras nec mauris id purus suscipit tempor. Aliquam pulvinar arcu sit amet tincidunt vehicula. Duis justo purus, mattis nec efficitur et, feugiat in diam. Sed nec fermentum magna, sit amet finibus quam. Donec sem ligula, blandit a sapien eget, posuere luctus dui.
        
        Cras et eleifend eros. Quisque aliquam, massa at bibendum malesuada, arcu tortor tempor felis, et porttitor sem nisi at orci. Vivamus magna tortor, posuere cursus ultricies vel, accumsan non mi. In eu feugiat mauris. Nunc quis libero semper, maximus libero in, volutpat purus. Curabitur feugiat pellentesque sollicitudin. Aliquam in nisl scelerisque sem luctus molestie venenatis vitae nisl. Etiam sit amet risus vulputate, ultricies dui vitae, consequat urna.",
        'date' => "2021-01-06",
        'is_active' => 1,
        'category_id' => 1,
        'user_id' => 1,
    ]);
    DB::table('posts')->insert([
        'id' => 5,
        'title'  => "Post 5",
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper neque ac odio pulvinar facilisis. Curabitur consectetur laoreet dolor non elementum. Suspendisse iaculis erat et porta sodales. Nullam ac nibh pulvinar diam tempus tincidunt quis sit amet nibh. Donec quis rhoncus risus. Curabitur sed ligula posuere, tristique arcu ut, rutrum mauris. Nulla pellentesque semper ipsum et lacinia. Vestibulum quis lacus nibh. Fusce dignissim euismod libero non aliquam. Praesent eget neque id mauris tempus condimentum mattis ut nunc. Cras aliquam sem ut felis tempor blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque faucibus sit amet massa quis lobortis.

        Proin malesuada malesuada neque, eu commodo augue tempus sed. Donec ornare metus eu commodo congue. Mauris quis nunc eleifend, condimentum justo vel, lobortis tellus. Vivamus lectus nibh, convallis ut dictum a, eleifend id ligula. Nulla ac tincidunt lorem, vehicula semper dui. Cras nec mauris id purus suscipit tempor. Aliquam pulvinar arcu sit amet tincidunt vehicula. Duis justo purus, mattis nec efficitur et, feugiat in diam. Sed nec fermentum magna, sit amet finibus quam. Donec sem ligula, blandit a sapien eget, posuere luctus dui.
        
        Cras et eleifend eros. Quisque aliquam, massa at bibendum malesuada, arcu tortor tempor felis, et porttitor sem nisi at orci. Vivamus magna tortor, posuere cursus ultricies vel, accumsan non mi. In eu feugiat mauris. Nunc quis libero semper, maximus libero in, volutpat purus. Curabitur feugiat pellentesque sollicitudin. Aliquam in nisl scelerisque sem luctus molestie venenatis vitae nisl. Etiam sit amet risus vulputate, ultricies dui vitae, consequat urna.",
        'date' => "2021-01-06",
        'is_active' => 1,
        'category_id' => 2,
        'user_id' => 1,
    ]);
    DB::table('posts')->insert([
        'id' => 6,
        'title'  => "Post 6",
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper neque ac odio pulvinar facilisis. Curabitur consectetur laoreet dolor non elementum. Suspendisse iaculis erat et porta sodales. Nullam ac nibh pulvinar diam tempus tincidunt quis sit amet nibh. Donec quis rhoncus risus. Curabitur sed ligula posuere, tristique arcu ut, rutrum mauris. Nulla pellentesque semper ipsum et lacinia. Vestibulum quis lacus nibh. Fusce dignissim euismod libero non aliquam. Praesent eget neque id mauris tempus condimentum mattis ut nunc. Cras aliquam sem ut felis tempor blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque faucibus sit amet massa quis lobortis.

        Proin malesuada malesuada neque, eu commodo augue tempus sed. Donec ornare metus eu commodo congue. Mauris quis nunc eleifend, condimentum justo vel, lobortis tellus. Vivamus lectus nibh, convallis ut dictum a, eleifend id ligula. Nulla ac tincidunt lorem, vehicula semper dui. Cras nec mauris id purus suscipit tempor. Aliquam pulvinar arcu sit amet tincidunt vehicula. Duis justo purus, mattis nec efficitur et, feugiat in diam. Sed nec fermentum magna, sit amet finibus quam. Donec sem ligula, blandit a sapien eget, posuere luctus dui.
        
        Cras et eleifend eros. Quisque aliquam, massa at bibendum malesuada, arcu tortor tempor felis, et porttitor sem nisi at orci. Vivamus magna tortor, posuere cursus ultricies vel, accumsan non mi. In eu feugiat mauris. Nunc quis libero semper, maximus libero in, volutpat purus. Curabitur feugiat pellentesque sollicitudin. Aliquam in nisl scelerisque sem luctus molestie venenatis vitae nisl. Etiam sit amet risus vulputate, ultricies dui vitae, consequat urna.",
        'date' => "2021-01-06",
        'is_active' => 1,
        'category_id' => 2,
        'user_id' => 1,
    ]);
    DB::table('posts')->insert([
        'id' => 7,
        'title'  => "Post 7",
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper neque ac odio pulvinar facilisis. Curabitur consectetur laoreet dolor non elementum. Suspendisse iaculis erat et porta sodales. Nullam ac nibh pulvinar diam tempus tincidunt quis sit amet nibh. Donec quis rhoncus risus. Curabitur sed ligula posuere, tristique arcu ut, rutrum mauris. Nulla pellentesque semper ipsum et lacinia. Vestibulum quis lacus nibh. Fusce dignissim euismod libero non aliquam. Praesent eget neque id mauris tempus condimentum mattis ut nunc. Cras aliquam sem ut felis tempor blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque faucibus sit amet massa quis lobortis.

        Proin malesuada malesuada neque, eu commodo augue tempus sed. Donec ornare metus eu commodo congue. Mauris quis nunc eleifend, condimentum justo vel, lobortis tellus. Vivamus lectus nibh, convallis ut dictum a, eleifend id ligula. Nulla ac tincidunt lorem, vehicula semper dui. Cras nec mauris id purus suscipit tempor. Aliquam pulvinar arcu sit amet tincidunt vehicula. Duis justo purus, mattis nec efficitur et, feugiat in diam. Sed nec fermentum magna, sit amet finibus quam. Donec sem ligula, blandit a sapien eget, posuere luctus dui.
        
        Cras et eleifend eros. Quisque aliquam, massa at bibendum malesuada, arcu tortor tempor felis, et porttitor sem nisi at orci. Vivamus magna tortor, posuere cursus ultricies vel, accumsan non mi. In eu feugiat mauris. Nunc quis libero semper, maximus libero in, volutpat purus. Curabitur feugiat pellentesque sollicitudin. Aliquam in nisl scelerisque sem luctus molestie venenatis vitae nisl. Etiam sit amet risus vulputate, ultricies dui vitae, consequat urna.",
        'date' => "2021-01-06",
        'is_active' => 1,
        'category_id' => 2,
        'user_id' => 1,
    ]);
    DB::table('posts')->insert([
        'id' => 8,
        'title'  => "Post 8",
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper neque ac odio pulvinar facilisis. Curabitur consectetur laoreet dolor non elementum. Suspendisse iaculis erat et porta sodales. Nullam ac nibh pulvinar diam tempus tincidunt quis sit amet nibh. Donec quis rhoncus risus. Curabitur sed ligula posuere, tristique arcu ut, rutrum mauris. Nulla pellentesque semper ipsum et lacinia. Vestibulum quis lacus nibh. Fusce dignissim euismod libero non aliquam. Praesent eget neque id mauris tempus condimentum mattis ut nunc. Cras aliquam sem ut felis tempor blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque faucibus sit amet massa quis lobortis.

        Proin malesuada malesuada neque, eu commodo augue tempus sed. Donec ornare metus eu commodo congue. Mauris quis nunc eleifend, condimentum justo vel, lobortis tellus. Vivamus lectus nibh, convallis ut dictum a, eleifend id ligula. Nulla ac tincidunt lorem, vehicula semper dui. Cras nec mauris id purus suscipit tempor. Aliquam pulvinar arcu sit amet tincidunt vehicula. Duis justo purus, mattis nec efficitur et, feugiat in diam. Sed nec fermentum magna, sit amet finibus quam. Donec sem ligula, blandit a sapien eget, posuere luctus dui.
        
        Cras et eleifend eros. Quisque aliquam, massa at bibendum malesuada, arcu tortor tempor felis, et porttitor sem nisi at orci. Vivamus magna tortor, posuere cursus ultricies vel, accumsan non mi. In eu feugiat mauris. Nunc quis libero semper, maximus libero in, volutpat purus. Curabitur feugiat pellentesque sollicitudin. Aliquam in nisl scelerisque sem luctus molestie venenatis vitae nisl. Etiam sit amet risus vulputate, ultricies dui vitae, consequat urna.",
        'date' => "2021-01-06",
        'is_active' => 1,
        'category_id' => 3,
        'user_id' => 1,
    ]);
    DB::table('posts')->insert([
        'id' => 9,
        'title'  => "Post 9",
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper neque ac odio pulvinar facilisis. Curabitur consectetur laoreet dolor non elementum. Suspendisse iaculis erat et porta sodales. Nullam ac nibh pulvinar diam tempus tincidunt quis sit amet nibh. Donec quis rhoncus risus. Curabitur sed ligula posuere, tristique arcu ut, rutrum mauris. Nulla pellentesque semper ipsum et lacinia. Vestibulum quis lacus nibh. Fusce dignissim euismod libero non aliquam. Praesent eget neque id mauris tempus condimentum mattis ut nunc. Cras aliquam sem ut felis tempor blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque faucibus sit amet massa quis lobortis.

        Proin malesuada malesuada neque, eu commodo augue tempus sed. Donec ornare metus eu commodo congue. Mauris quis nunc eleifend, condimentum justo vel, lobortis tellus. Vivamus lectus nibh, convallis ut dictum a, eleifend id ligula. Nulla ac tincidunt lorem, vehicula semper dui. Cras nec mauris id purus suscipit tempor. Aliquam pulvinar arcu sit amet tincidunt vehicula. Duis justo purus, mattis nec efficitur et, feugiat in diam. Sed nec fermentum magna, sit amet finibus quam. Donec sem ligula, blandit a sapien eget, posuere luctus dui.
        
        Cras et eleifend eros. Quisque aliquam, massa at bibendum malesuada, arcu tortor tempor felis, et porttitor sem nisi at orci. Vivamus magna tortor, posuere cursus ultricies vel, accumsan non mi. In eu feugiat mauris. Nunc quis libero semper, maximus libero in, volutpat purus. Curabitur feugiat pellentesque sollicitudin. Aliquam in nisl scelerisque sem luctus molestie venenatis vitae nisl. Etiam sit amet risus vulputate, ultricies dui vitae, consequat urna.",
        'date' => "2021-01-06",
        'is_active' => 1,
        'category_id' => 3,
        'user_id' => 1,
    ]);
    DB::table('posts')->insert([
        'id' => 10,
        'title'  => "Post 10",
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper neque ac odio pulvinar facilisis. Curabitur consectetur laoreet dolor non elementum. Suspendisse iaculis erat et porta sodales. Nullam ac nibh pulvinar diam tempus tincidunt quis sit amet nibh. Donec quis rhoncus risus. Curabitur sed ligula posuere, tristique arcu ut, rutrum mauris. Nulla pellentesque semper ipsum et lacinia. Vestibulum quis lacus nibh. Fusce dignissim euismod libero non aliquam. Praesent eget neque id mauris tempus condimentum mattis ut nunc. Cras aliquam sem ut felis tempor blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque faucibus sit amet massa quis lobortis.

        Proin malesuada malesuada neque, eu commodo augue tempus sed. Donec ornare metus eu commodo congue. Mauris quis nunc eleifend, condimentum justo vel, lobortis tellus. Vivamus lectus nibh, convallis ut dictum a, eleifend id ligula. Nulla ac tincidunt lorem, vehicula semper dui. Cras nec mauris id purus suscipit tempor. Aliquam pulvinar arcu sit amet tincidunt vehicula. Duis justo purus, mattis nec efficitur et, feugiat in diam. Sed nec fermentum magna, sit amet finibus quam. Donec sem ligula, blandit a sapien eget, posuere luctus dui.
        
        Cras et eleifend eros. Quisque aliquam, massa at bibendum malesuada, arcu tortor tempor felis, et porttitor sem nisi at orci. Vivamus magna tortor, posuere cursus ultricies vel, accumsan non mi. In eu feugiat mauris. Nunc quis libero semper, maximus libero in, volutpat purus. Curabitur feugiat pellentesque sollicitudin. Aliquam in nisl scelerisque sem luctus molestie venenatis vitae nisl. Etiam sit amet risus vulputate, ultricies dui vitae, consequat urna.",
        'date' => "2021-01-06",
        'is_active' => 1,
        'category_id' => 3,
        'user_id' => 1,
    ]);
    DB::table('static_sites')->insert([
        'id' => 1,
        'name'  => "Strona statyczna 1",
        'contents' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    ]);
    DB::table('static_sites')->insert([
        'id' => 2,
        'name'  => "Strona statyczna 2",
        'contents' => "Lorem Ipsum is  simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    ]);
    
    }
}
