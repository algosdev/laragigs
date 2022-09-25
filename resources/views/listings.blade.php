<h1>{{$heading}}</h1>
<ul>
@unless(count($listings) == 0)
@foreach($listings as $item)
        <li>
            <h4><a href="/listings/{{$item['id']}}">{{$item['title']}}</a></h4>
            <p>{{$item['description']}}</p>
        </li>
@endforeach
</ul>
@else
<p>No listings found</p>
@endunless