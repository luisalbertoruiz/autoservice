@foreach($vehiculos as $vehiculo)
<option value="{{$vehiculo->id}}">{{$vehiculo->placas.' '.$vehiculo->smarca->nombre.' '.$vehiculo->color->nombre}}</option>
@endforeach