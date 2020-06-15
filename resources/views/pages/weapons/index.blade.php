@extends ('layout.app')


@section ('content')
<div class="container is-fluid">
    <div class="has-text-right">
        <a href="/weapons/create" class="button is-success is-rounded">
            <i class="fas fa-plus"></i> Nuevo
        </a>
    </div>
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


                    <tr>
                        <td>1</td>
                        <td>
                            <figure class="image w-pro">
                                <img src="{{asset('/uploads/images/65aa7babb79e0b3c4b36e59eb6da7ce09ad8d35ca2ef29fb7410f4c6d497925c.png')}}" alt="">
                            </figure>
                        </td>
                        <td>Nombre</td>
                        <td>
                            <progress class="progress is-success" value="70" max="100">70%</progress>
                            <progress class="progress is-warning" value="35" max="100">35%</progress>
                            <progress class="progress is-danger" value="60" max="100">60%</progress>
                        </td>
                        <td>
                            created_at
                            updated_at
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
  </div>

@stop