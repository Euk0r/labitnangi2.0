@if(!empty($_POST) && isset($errors))
    @if( count($errors) != 0 )
    <div class="alert alert-danger">
        <ul>
            @foreach($errors as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
    @else
        <div class="alert alert-success">
            <ul>
                <li>
                    @yield('success-text')
                </li>
            </ul>
        </div>
    @endif
@endif
