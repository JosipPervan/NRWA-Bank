@extends('layouts.app')

@section('content')
    <h1>Search Departments</h1>
    <input type="text" id="search-input" placeholder="Search Departments...">
    <div id="search-results"></div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('search-input').addEventListener('input', function() {
            let query = this.value;
            axios.get('/api/search/department?query=' + query)
                .then(response => {
                    let results = response.data;
                    let output = '';
                    if (results.length > 0) {
                        results.forEach(result => {
                            output += `<p>${result.DEPARTMENT_NAME}</p>`;
                        });
                    } else {
                        output = '<p>No department found</p>';
                    }
                    document.getElementById('search-results').innerHTML = output;
                })
                .catch(error => console.error(error));
        });
    </script>
@endsection
