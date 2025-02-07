@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="navbar">
            <h1>Student Dashboard</h1>
        </div>
        <div class="container">
            <div class="card">
                <h2>View Courses</h2>
                <p>Browse and view available courses.</p>
                <a href="#" class="btn btn-primary">Go to Courses</a>
            </div>
            <div class="card">
                <h2>View Grades</h2>
                <p>Check your grades and academic performance.</p>
                <a href="#" class="btn btn-primary">Go to Grades</a>
            </div>
            <div class="card">
                <h2>Settings</h2>
                <p>Update your account settings and preferences.</p>
                <a href="#" class="btn btn-primary">Go to Settings</a>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #007bff;
            padding: 1rem;
            color: #fff;
            text-align: center;
        }

        .navbar h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        .container {
            padding: 2rem;
        }

        .card {
            background: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card h2 {
            margin-top: 0;
            font-size: 1.25rem;
            color: #333;
        }

        .card p {
            color: #555;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 0.75rem 1.5rem;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            font-weight: bold;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
@endpush
