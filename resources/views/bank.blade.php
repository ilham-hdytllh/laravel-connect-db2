<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($banks as $bank)
            <tr>
                <td>{{ $bank->bankcode }}</td>
                <td>{{ $bank->companycode }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
