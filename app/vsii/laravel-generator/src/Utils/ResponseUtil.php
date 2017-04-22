<?php

namespace InfyOm\Generator\Utils;

class ResponseUtil
{
    /**
     * @param string $message
     * @param mixed  $data
     *
     * @return array
     */
    public static function makeResponse($message, $data)
    {
        return [
            'statusCode' => 200,
            'errorCode' => 0,
            'data' => $data,
            'errorMsg' => $message
        ];
    }

    /**
     * @param string $message
     * @param array  $data
     *
     * @return array
     */
    public static function makeError($message, array $data = [])
    {
        $res = [
            'statusCode' => 200,
            'errorCode' => 1,
            'errorMsg' => $message
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }
}
