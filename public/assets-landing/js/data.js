var APP_DATA = {
    scenes: [
        {
            id: "0-tampak-1",
            name: "View 1",
            levels: [
                {
                    tileSize: 256,
                    size: 256,
                    fallbackOnly: true,
                },
                {
                    tileSize: 512,
                    size: 512,
                },
                {
                    tileSize: 512,
                    size: 1024,
                },
                {
                    tileSize: 512,
                    size: 2048,
                },
            ],
            faceSize: 2048,
            initialViewParameters: {
                pitch: 0,
                yaw: 0,
                fov: 1.5707963267948966,
            },
            linkHotspots: [
                {
                    yaw: 1.1015078181146691,
                    pitch: 0.11077853728325238,
                    rotation: 0,
                    target: "1-tampak-2",
                },
            ],
            infoHotspots: [],
        },
        {
            id: "1-tampak-2",
            name: "View 2",
            levels: [
                {
                    tileSize: 256,
                    size: 256,
                    fallbackOnly: true,
                },
                {
                    tileSize: 512,
                    size: 512,
                },
                {
                    tileSize: 512,
                    size: 1024,
                },
                {
                    tileSize: 512,
                    size: 2048,
                },
            ],
            faceSize: 2048,
            initialViewParameters: {
                pitch: 0,
                yaw: 0,
                fov: 1.5707963267948966,
            },
            linkHotspots: [
                {
                    yaw: 1.3595099907655612,
                    pitch: 0.19118165496255202,
                    rotation: 0,
                    target: "0-tampak-1",
                },
                {
                    yaw: -1.8919971428956668,
                    pitch: 0.1790053424502176,
                    rotation: 0,
                    target: "2-tampak-3",
                },
            ],
            infoHotspots: [],
        },
        {
            id: "2-tampak-3",
            name: "View 3",
            levels: [
                {
                    tileSize: 256,
                    size: 256,
                    fallbackOnly: true,
                },
                {
                    tileSize: 512,
                    size: 512,
                },
                {
                    tileSize: 512,
                    size: 1024,
                },
                {
                    tileSize: 512,
                    size: 2048,
                },
            ],
            faceSize: 2048,
            initialViewParameters: {
                pitch: 0,
                yaw: 0,
                fov: 1.5707963267948966,
            },
            linkHotspots: [
                {
                    yaw: 1.8634495656439674,
                    pitch: 0.1876648511626442,
                    rotation: 0,
                    target: "1-tampak-2",
                },
                {
                    yaw: -1.7143713208851938,
                    pitch: 0.2774542503694679,
                    rotation: 0,
                    target: "3-tampak-4",
                },
            ],
            infoHotspots: [],
        },
        {
            id: "3-tampak-4",
            name: "View 4",
            levels: [
                {
                    tileSize: 256,
                    size: 256,
                    fallbackOnly: true,
                },
                {
                    tileSize: 512,
                    size: 512,
                },
                {
                    tileSize: 512,
                    size: 1024,
                },
                {
                    tileSize: 512,
                    size: 2048,
                },
            ],
            faceSize: 2048,
            initialViewParameters: {
                pitch: 0,
                yaw: 0,
                fov: 1.5707963267948966,
            },
            linkHotspots: [
                {
                    yaw: -1.9195135602051696,
                    pitch: 0.12421784947983205,
                    rotation: 0,
                    target: "2-tampak-3",
                },
                {
                    yaw: 1.3580680682581345,
                    pitch: 0.12867368535497192,
                    rotation: 0,
                    target: "4-tampak-5",
                },
            ],
            infoHotspots: [],
        },
        {
            id: "4-tampak-5",
            name: "View 5",
            levels: [
                {
                    tileSize: 256,
                    size: 256,
                    fallbackOnly: true,
                },
                {
                    tileSize: 512,
                    size: 512,
                },
                {
                    tileSize: 512,
                    size: 1024,
                },
                {
                    tileSize: 512,
                    size: 2048,
                },
            ],
            faceSize: 2048,
            initialViewParameters: {
                pitch: 0,
                yaw: 0,
                fov: 1.5707963267948966,
            },
            linkHotspots: [
                {
                    yaw: -2.2507753550244747,
                    pitch: 0.1361208437150303,
                    rotation: 0,
                    target: "3-tampak-4",
                },
                {
                    yaw: 0.007867266487821212,
                    pitch: 0.3080659365226275,
                    rotation: 0,
                    target: "5-tampak-6",
                },
            ],
            infoHotspots: [],
        },
        {
            id: "5-tampak-6",
            name: "View 6",
            levels: [
                {
                    tileSize: 256,
                    size: 256,
                    fallbackOnly: true,
                },
                {
                    tileSize: 512,
                    size: 512,
                },
                {
                    tileSize: 512,
                    size: 1024,
                },
                {
                    tileSize: 512,
                    size: 2048,
                },
            ],
            faceSize: 2048,
            initialViewParameters: {
                yaw: -2.25060566722947,
                pitch: 0.11949686657854741,
                fov: 1.2038499345169202,
            },
            linkHotspots: [
                {
                    yaw: -2.6434869227073676,
                    pitch: 0.0567740330746922,
                    rotation: 0,
                    target: "4-tampak-5",
                },
            ],
            infoHotspots: [],
        },
    ],
    name: "Project Title",
    settings: {
        mouseViewMode: "drag",
        autorotateEnabled: false,
        fullscreenButton: true,
        viewControlButtons: false,
    },
};
