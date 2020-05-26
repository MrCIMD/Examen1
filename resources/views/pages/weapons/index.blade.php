@extends ('layout.app')


@section ('content')

<div class="container is-fluid">
    <div class="notification">
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Precision / Scope / Damage</th>
                        <th>Create At</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($weapons as $weapon)
                    <tr>
                        <td>{{ $weapon->id }}</td>
                        <td>
                            <figure class="image w-pro">
                                <img src="{{asset('IMG/' . $weapon->image )}}" alt="">
                            </figure>
                        </td>
                        <td>{{ $weapon->name }}</td>
                        <td>
                            <progress class="progress is-success" value="{{ $weapon->precision }}" max="100">{{ $weapon->precision }}%</progress>
                            <progress class="progress is-warning" value="{{ $weapon->scope }}" max="100">{{ $weapon->scope }}%</progress>
                            <progress class="progress is-danger" value="{{ $weapon->hurt }}" max="100">{{ $weapon->hurt }}%</progress>
                        </td>
                        <td>
                            {{ $weapon->created_at }}
                            {{ $weapon->updated_at }}
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
  </div>

@stop