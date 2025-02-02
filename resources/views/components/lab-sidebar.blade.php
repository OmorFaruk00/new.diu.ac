<style>
    .lab-facilities li a {

        color: #000;
        font-size: 20px;
        line-height: 35px;
        font-weight: 500;

        
    }

    .lab-facilities li a:hover {
        color: #01AA4D;
    }

    .experiment-img img {
        width: 100%;
        height: 100%;
    }
    .table{
        font-size: 17px;
        color: #000;
    }
</style>

<h1>Lab Facilities</h1>
<ul class="lab-facilities">
    <li>
        <a href="{{ route('environmental-engineering-lab') }}">Environmental Engineering Lab</a>
    </li>
    <li>
        <a href="{{ route('surveying-lab') }}">Surveying Lab</a>
    </li>
    <li>
        <a href="{{ route('geotechnical-engineering-lab') }}">Geotechnical Engineering Lab</a>
    </li>
    <li>
        <a href="{{ route('transportation-engineering-lab') }}">Transportation Engineering Lab</a>
    </li>
    <li>
        <a href="{{ route('hydraulics-lab') }}"> Hydraulics Lab</a>
    </li>
    <li>
        <a href="{{ route('concrete-lab') }}"> Concrete Lab</a>
    </li>
    <li>
        <a href="{{ route('mechanics-lab') }}"> Mechanics Lab</a>
    </li>
    <li>
        <a href="{{ route('computer-lab') }}"> Computer Lab</a>
    </li>

</ul>
