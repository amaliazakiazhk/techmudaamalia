<div class="row"> 
<div class="col-6">   
    <h1>Program List</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Program </th>
         </tr>
      </thead>
      <tbody>
        @foreach($program as $program)
          <tr>
            <td>{{ $program->id }}</td>
            <td>{{ $program->name }}</td>
            <td>{{ $program->email }}</td>
            <td>{{ $program->phone }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

</div>