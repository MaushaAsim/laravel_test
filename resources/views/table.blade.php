  @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $task['task'] }}</div>
                                </td>
 
                                <td>
                                    <div class="">
                                    {{$task['due']}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
