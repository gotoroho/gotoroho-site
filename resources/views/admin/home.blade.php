@extends('layouts.admin')

@section('content')
    <div class="wrapper">
        <h2>Skills groups</h2>

        @if(empty($groups))
            <p>There is no groups yet!</p>
        @else
            <ul class="admin-skills-groups">
                {{--TODO: fix single group hidden fields position--}}
                @foreach($groups as $group)
                    <li>
                        <form action="{{ route('update-skill-group', ['id' => $group['id']]) }}" method="post">
                            <input type="hidden" name="_method" value="put" />
                            @csrf
                            <h3>{{ $group['name'] }}</h3>
                            <label>Name <input type="text" name="name" value="{{ $group['name'] }}"></label>
                            <label>Sort order <input type="text" name="sort_order" value="{{ $group['sort_order'] }}"></label>
                            <button type="submit">Save</button>
                        </form>

                        @if(!empty($group['skills']))
                            <ul>
                                @foreach($group['skills'] as $skill)
                                    <li>
                                        <form action="{{ route('update-skill', ['id' => $skill['id']]) }}" method="post">
                                            <input type="hidden" name="_method" value="put" />
                                            @csrf
                                            <h3>{{ $skill['name'] }}</h3>
                                            <label>Name <input type="text" name="name" value="{{ $skill['name'] }}"></label>
                                            <label>Icon <input type="text" name="icon" value="{{ $skill['icon'] }}"></label>
                                            <button type="submit">Save</button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('create-skill-group') }}" method="post">
            @csrf
            <label><input type="text" name="name" placeholder="Name"></label>
            <label><input type="number" name="sort_order" placeholder="Sort order"></label>
            <button type="submit">Create group</button>
        </form>
    </div>
@endsection
