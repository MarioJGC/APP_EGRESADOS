@extends('adminlte::page')
@section('title', 'Egresados')
@section('content')

    @role('admin')

        <div class="container">
            <h2 class="display-5 fw-bold text-center" style="color: #d0d9ea;">Estudiantes vs Éxito laboral</h2>

            <div class="row">
                <div class="col-6 mx-auto">
                    <canvas id="successChart" width="100" height="80"></canvas>
                </div>
            </div>

            <div>
                <div colspan="5" class="text-right">
                    <button class="btn btn-dark mr-4" onclick="window.location.href='{{ route('export.export') }}'">Exportar Datos</button>
                </div>
            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var ctx = document.getElementById('successChart').getContext('2d');
                var successChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Éxito', 'Fracaso'],
                        datasets: [{
                            data: [{{ $successCount }}, {{ $failureCount }}],
                            backgroundColor: ['#d0d9ea', '#bdc7d7'],
                            hoverBackgroundColor: ['#d0d9ea', '#bdc7d7']
                        }]
                    }
                });
            });
        </script>
    @endrole


    @role('egresado')

    @endrole

@endsection
