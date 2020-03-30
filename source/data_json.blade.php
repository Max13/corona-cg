---
permalink: data.json
---

{
    "counters": {
@foreach ($page->counters as $key => $counter)
        "{{ $key }}": {{ $counter->n }}{{ $loop->last ? null : ','  }}
@endforeach
    },
    "locations": [
@foreach ($page->locations as $city => $data)
        {
            "city": "{{ $city }}",
            "coordinates": {{ $data->coordinates }},
            "count": {{ $data->count }},
            "recovered": {{ $data->recovered }}
        }{{ $loop->last ? null : ',' }}
@endforeach
    ],
    "statements": [
@foreach ($page->official_statements as $statement)
        {
            "name": "{{ $statement->name }}",
            "date": "{{ $statement->date->toDateString() }}",
@if ($statement->filepath[0] === '/')
            "filepath": "{{ $page->baseUrl.$statement->filepath }}"
@else
            "filepath": "{{ $statement->filepath }}"
@endif
        }{{ $loop->last ? null : ',' }}
@endforeach
    ]
}
