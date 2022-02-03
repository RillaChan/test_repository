<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
    <body>
        <h1>Calculator</h1>

        <form method="POST" action="/calculator">
            Operation:
            <select name="operation">
                @foreach ($operations as $operation => $text)
                    <option value="{{ $operation }}">{{ $text }}</option>
                @endforeach
            </select>
            <br />

            First number:
            <input type="number" name="a" value="{{ $a ?? 0 }}" />
            <br />

            Second number:
            <input type="number" name="b" value="{{ $b ?? 0 }}" />
            <br />

            <button type="submit">Calculate the result</button>
        </form>

        @if (isset($result))
            <p>The result is: {{ $result }}</p>
        @endif
    </body>
</html>