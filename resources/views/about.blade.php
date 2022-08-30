{{-- @if (5>10)
    <p> 5 is lower than 10</p>
  @elseif(5==10)
        <p> 5 is in deed lower than 10</p>
    
    @else
    <p>All contitions are wrong</p>

@endif

@unless (!empty($name))
    <p> Name is not empty</p>
@endunless

@empty(!$name)
<p> Name is not empty</p>
@endempty

@isset($name)
<p> Name has been set</p>  
@endisset --}}

<!--
    comparing multiple possible conditions
    multiple values that may require the same code
-->

{{-- @switch($name)
    @case('Dary')
        <h1>Name is Dary!</h1>
        @break
    @case('John')
        <h1>Name is John!</h1>
        @break
    @case('Samuel')
    <h1>Name is Samuel!</h1>
    @break
    @default
    <h1>   No name matches</h1>
        
@endswitch --}}

<!--
    Types of loop:
    * For loop
    *Foreach loop
    *For else loop
    *While loop
-->

@for ($i=0;$i<=10;$i++)
    <h2>the number is{{ $i }} </h2>    
@endfor

@foreach ($names as $name )
<h2> The name is {{ $name }}    
@endforeach

<br>
<br>
<br>
@forelse ($names as $name )

    <h1> The name is !{{ $name }}</h1>
@empty

    <h2>Name not found!</h2>
    
@endforelse

{{ $i=0}}

@while ($i<10)
<br>{{ $i++}} <br>

{{-- {{ $i++}} --}}
@endwhile
