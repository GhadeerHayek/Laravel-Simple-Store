@extends('layouts.dashboard_main_layout')
@Section("PageTitle")
    Stores
@endsection
@Section('PageInnerTitle')
    All Stores
@endsection
@Section('PageMainContent')
    <!--
        Here we would display a list of all stores
    -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All stores</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Deleted At</th>
                                <th>Status</th>
                                <th>-</th>
                                <th>-</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($stores as $store)
                                <tr>
                                    <td>{{ $store->id }}</td>
                                    @if(!is_null($store->image_url ))
                                        <td><img width="35" src="{{URL($store->image_url)}}"></td>
                                    @else
                                        <td></td>
                                    @endif
                                    <td>{{$store->name  }}</td>
                                    <td>{{$store->location  }}</td>
                                    <td><span>{{ $store->created_at }}</span></td>
                                    <td><span>{{  $store->updated_at}}</span></td>
                                    <td><span>{{ $store->deleted_at }}</span></td>
                                    @if(is_null($store->deleted_at))
                                        <!-- if it's not deleted, it's active, you can edit and delete.-->
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>
                                            <form method="get" action="{{URL('/stores/'.$store->id.'/edit')}}">
                                                <Button class="btn btn-primary btn-lg" type='submit'>Edit</Button>
                                            </form>
                                        </td>
                                        <td>
                                            <form method="post" action="{{URL('/stores/'.$store->id)}}">
                                                @csrf<input type="hidden" name="_method" value="delete"/>
                                                <Button class="btn btn-danger btn-lg " type='submit'>Delete</Button>
                                            </form>
                                        </td>
                                    @else
                                        <!--if it's deleted, it's inactive, you can;t edit or delete. but you can restore -->
                                        <td><span class="badge badge-danger">Inactive</span></td>
                                        <td>
                                            <form method="get" action="{{URL('/stores/'.$store->id.'/edit')}}">
                                                <Button class="btn btn-primary btn-lg" type='submit' disabled>Edit
                                                </Button>
                                            </form>
                                        </td>
                                        <td>
                                            <form method="get" action="{{URL('/stores/restore/'.$store->id)}}">
                                                <Button class="btn btn-primary btn-lg" type='submit'>Restore</Button>
                                            </form>
                                        </td>

                                    @endif

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

