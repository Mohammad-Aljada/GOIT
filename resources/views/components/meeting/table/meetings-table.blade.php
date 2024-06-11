<div class="d-flex justify-content-end p-1.5">
    <x-primary-button class="bg-success d-flex align-items-center gap-1" data-bs-toggle="modal"
        data-bs-target="#addMeetingModal">
        <img src="/image/icone/add.svg" class="add" alt="add image">
        <span class="btn-text">Add</span>
    </x-primary-button>
    <x-meeting.forms.formAddMeeting></x-meeting.forms.formAddMeeting>
</div>
<div class="table-responsive text-wrap">
    <table class="table table-dark ">
        @if (isset($meetings) && count($meetings) > 0)
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Data</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Location</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($meetings as $meeting)
                    <tr>
                        <td class="text-center">{{ $meeting->id }}</td>
                        <td class="text-center">{{ $meeting->title }}</td>
                        <td class="text-center">{{ $meeting->description }}</td>
                        <td class="text-center">{{ $meeting->date }}</td>
                        <td class="text-center">{{ $meeting->time }}</td>
                        <td class="text-center">{{ $meeting->location }}</td>
                        <td class="td-actions text-center" id="{{ $meeting->id }}">
                            <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon"
                                data-bs-toggle="modal" data-bs-target="#updateMeetingModal"
                                data-meeting-id="{{ $meeting->id }}" data-meeting-title="{{ $meeting->title }}"
                                data-meeting-description="{{ $meeting->description }}"
                                data-meeting-date="{{ $meeting->date }}" data-meeting-time="{{ $meeting->time }}"
                                data-meeting-location="{{ $meeting->location }}">
                                <img src="/image/icone/edit.svg" class="edit" alt="edit image">
                            </button>
                            <x-meeting.forms.formUpdateMeeting :meeting="$meeting"></x-meeting.forms.formUpdateMeeting>
                            <button data-meeting-id="{{ $meeting->id }}" type="button" rel="tooltip"
                                class="btn btn-danger btn-sm btn-icon" data-bs-toggle="modal"
                                data-bs-target="#deleteMeetingModal">
                                <img src="/image/icone/delete.svg" class="delete" alt="delete image">
                            </button>
                            <x-meeting.forms.formDeleteMeeting :meeting="$meeting"></x-meeting.forms.formDeleteMeeting>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        @else
            <p class="text-center text-danger font-weight-bold ">No meetings available.</p>
        @endif
    </table>
</div>
@vite(['resources/js/controller/updatemeetings.js'])
