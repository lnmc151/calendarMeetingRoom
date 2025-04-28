@extends('layouts.defalut')

@section('content')
<div class="card w-auto mx-auto" style="height: calc(100vh - 100px);">
    <div class="card-header text-center bg-primary text-white">
        <h4>จองห้องประชุม</h4>
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-12 col-md-6 mb-3"> 
                    <label for="" class="form-label">ชื่อผู้จอง</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="" class="form-label">กลุ่มงาน</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="" class="form-label">ห้องประชุม</label>
                    <select name="" id="" class="form-select">
                        <option value="">ห้องประชุม 1</option>
                        <option value="">ห้องประชุม 2</option>
                        <option value="">ห้องประชุม 3</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label for="" class="form-label">วันที่จอง</label>
                    <input type="date" name="" id="" class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="" class="form-label">เวลาที่เริ่ม</label>
                    <input type="time" name="" id="" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <label for="" class="form-label">วันที่สิ้นสุด</label>
                    <input type="date" name="" id="" class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="" class="form-label">เวลาสิ้นสุด</label>
                    <input type="time" name="" id="" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="" class="form-label">หัวข้อในการประชุม</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
            </div>



            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">ยืนยันการจอง</button>
            </div>
        </form>
    </div>
</div>
@endsection
