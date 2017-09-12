    <table class="table table-bordered">
        <thead>
            <tr>                        
                <th>日期</th>
                <th>期刊</th>
                <th>平码</th>
                <th>特码</th>
            </tr>
        </thead>

        @foreach($results as $result)
            <tr>
                <td>{{ $result->issue_date  }}</td>
                <td>{{ $result->issue_num  }}</td>

                <?php
                    $tmp = explode('-', $result->number);
                    $flat = explode(',', $tmp[0]);
                    $special = $tmp[1];
                ?>   

                <td>
                    @foreach($flat as $f)
                            {{ $f }}
                    @endforeach   
                </td>            
                <td>{{ $special}}</td>

                {{-- <td >{{ $result->issue_date  }}</td> --}}
            </tr>
        @endforeach

    </table>