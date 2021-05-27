<?php

if (! function_exists('app_copyright')) {
    /**
     * Get the application copyright.
     *
     * @return string
     */
    function app_copyright()
    {
        return Settings::locale()->get('copyright');
    }
}
if (! function_exists('app_name')) {
    /**
     * Get the application name.
     *
     * @return string
     */
    function app_name()
    {
        return Settings::locale()
            ->get('name', config('app.name', 'Laravel'))
            ?: config('app.name', 'Laravel');
    }
}
if (! function_exists('decimalRand')) {
    function decimalRand($iMin, $iMax, $fSteps = 0.5)
    {
        $a = range($iMin, $iMax, $fSteps);

        return $a[mt_rand(0, count($a)-1)];
    }
}


if (!function_exists('validate_base64')) {

    /**
     * Validate a base64 content.
     *
     * @param string $base64data
     * @param array $allowedMime example ['png', 'jpg', 'jpeg']
     * @return bool
     */
    function validate_base64($base64data, array $allowedMime)
    {
        // strip out data uri scheme information (see RFC 2397)
        if (strpos($base64data, ';base64') !== false) {
            list(, $base64data) = explode(';', $base64data);
            list(, $base64data) = explode(',', $base64data);
        }

        // strict mode filters for non-base64 alphabet characters
        if (base64_decode($base64data, true) === false) {
            return false;
        }

        // decoding and then reeconding should not change the data
        if (base64_encode(base64_decode($base64data)) !== $base64data) {
            return false;
        }

        $binaryData = base64_decode($base64data);

        // temporarily store the decoded data on the filesystem to be able to pass it to the fileAdder
        $tmpFile = tempnam(sys_get_temp_dir(), 'medialibrary');
        file_put_contents($tmpFile, $binaryData);

        // guard Against Invalid MimeType
        $allowedMime = array_flatten($allowedMime);

        // no allowedMimeTypes, then any type would be ok
        if (empty($allowedMime)) {
            return true;
        }

        // Check the MimeTypes
        $validation = Illuminate\Support\Facades\Validator::make(
            ['file' => new Illuminate\Http\File($tmpFile)],
            ['file' => 'mimes:' . implode(',', $allowedMime)]
        );

            return !$validation->fails();
        }
    }

if (! function_exists('array_flatten')) {
    function array_flatten($array) {
        if (!is_array($array)) {
          return false;
        }
        $result = array();
        foreach ($array as $key => $value) {
          if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
          } else {
            $result = array_merge($result, array($key => $value));
          }
        }
        return $result;
      }
}
if (! function_exists('app_logo')) {
    /**
     * Get the application logo url.
     *
     * @return string
     */
    function app_logo()
    {
        if (($model = Settings::instance('logo')) && $file = $model->getFirstMediaUrl('logo')) {
            return $file;
        }

        return 'https://ui-avatars.com/api/?name='.rawurldecode(config('app.name')).'&bold=true';
    }
}

if (! function_exists('array_unset_by_value')) {
    /**
     * unset value from array .
     *
     * @return string
     */
    function array_unset_by_value($array , $value )
    {
        if (($key = array_search($value, $array)) !== false) {
            unset($array[$key]);
        }
    }
}



if (! function_exists('generateRandomString')) {
    /**
     * Get the application logo url.
     *
     * @return string
     */

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

if (! function_exists('str_limit')) {
    /**
     * str limit of string
     *
     * @return string
     */

    function str_limit($string ,$limit = 150 , $end = '...')
    {
        return Str::limit($string, $limit ,$end) ;

    }
}



if (! function_exists('app_favicon')) {
    /**
     * Get the application favicon url.
     *
     * @return string
     */
    function app_favicon()
    {
        if (($model = Settings::instance('favicon')) && $file = $model->getFirstMediaUrl('favicon')) {
            return $file;
        }

        return '/favicon.ico';
    }
}

if (! function_exists('count_formatted')) {
    /**
     * Format numbers to nearest thousands such as
     * Kilos, Millions, Billions, and Trillions with comma.
     *
     * @param int|float $num
     * @return float|string
     */
    function count_formatted($num)
    {
        if ($num >= 1000) {
            $x = round($num);
            $x_number_format = number_format($x);
            $x_array = explode(',', $x_number_format);
            $x_parts = ['K', 'M', 'B', 'T'];
            $x_count_parts = count($x_array) - 1;
            $x_display = $x_array[0].((int) $x_array[1][0] !== 0 ? '.'.$x_array[1][0] : '');
            $x_display .= $x_parts[$x_count_parts - 1];

            return $x_display;
        }

        return $num;
    }
}
