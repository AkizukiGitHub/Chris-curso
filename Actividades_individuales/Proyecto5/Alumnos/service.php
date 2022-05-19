<?php
header("Content-Type:application/json");
// if (isset($_GET["list"]))
{
    $name = $_GET["name"];
    $list = $_GET["list"];

    $list = strtoupper($list);
    $counter = 0;
    $fail = false;
    $length = strlen($list);
    for ($i = 0; $i < $length; $i++)
    {
        if ($list[$i] == "A")
        {
            $counter++;
        }
        if ($list[$i] == "T")
        {
            if ($i + 1 < $length)
            {
                if ($list[$i + 1] == "T")
                {
                    if ($i + 2 < $length)
                    {
                        if ($list[$i + 2] == "T")
                        {
                            $fail = true;
                        }
                    }
                }
            }
        }
    }

    if ($fail || $counter > 1)
    {
        response(300, "El Alumno $name: ", "No Merece Ser Premiado.");
    }
    else
    {
        response(200, "El Alumno $name: ", "Un Campeón Dale un Premio.");
    }
}

function response($status, $message, $data)
{
    header("HTTP/1.1 $status $message");
    $response['status'] = $status;
    $response['message'] = $message;
    $response['data'] = $data;

    $json_response = json_encode($response);
    echo $json_response;
}
?>