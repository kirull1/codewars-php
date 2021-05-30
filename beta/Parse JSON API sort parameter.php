<?php

    function getSortColumns(...$sort): array{
        $s = explode(',',str_replace(',,',',', empty($sort) || trim($sort[0], ',') == '' ? 'id' : trim($sort[0], ',')));
        return array_reduce($s, function($a, $e){$a[trim($e, '-')] = stripos($e, '-') !== false ? 'desc' : 'asc'; return $a;});
    }

