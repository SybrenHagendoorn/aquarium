<h2>Fish Name: </h2>
<p>{{ $fish->name }}</p>

<h3>Fish Belongs to</h3>

<ul>
    @foreach($fish->categories as $category)
    <li>{{ $category->title }}</li>
    @endforeach
</ul>
