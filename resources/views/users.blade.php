@extends('layouts.guest')

@section('content')
	<div class="container mx-auto">
      <h1 class="text-3xl font-bold m-20 text-center">PostgresSQL Test</h1>
  </div>

	<div class="container mx-auto">
      <h1 class="text-2xl font-bold mb-4">All Users</h1>
      <table class="min-w-full border-collapse">
          <thead>
              <tr>
                  <th class="py-2 px-3 border-b">ID</th>
                  <th class="py-2 px-3 border-b">Name</th>
                  <th class="py-2 px-3 border-b">Email</th>
              </tr>
          </thead>
          <tbody>
              @foreach($users as $user)
                  <tr>
                      <td class="py-2 px-3 border-b">{{ $user->id }}</td>
                      <td class="py-2 px-3 border-b">{{ $user->name }}</td>
                      <td class="py-2 px-3 border-b">{{ $user->email }}</td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
@endsection