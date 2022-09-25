@extends('backend.admin.pages.master')

@section('page')
<div class=edit style="padding:30px; display: flex;
  justify-content: space-between;">
    <h2>Vereadores<h2>
            <img src="{{ asset('frontend/img/editar.png') }}" width="35px" height="35px">
</div>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Idade</th>
                    <th>Efetivação</th>
                    <th>Salário</th>
                </tr>
            </thead>
            <tfoot>

            </tfoot>
            <tbody>
                <tr>
                    <td>Milena Alegre</td>
                    <td>Desenvolvedora Front-End</td>
                    <td>21</td>
                    <td>00/00/0000</td>
                    <td>R$100.000</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

@endsection