<?php

function bfs($graph, $start, $end) {
    $queue = new SplQueue();
    $queue->enqueue($start);
    $visited = [$start];

    while ($queue->count() > 0) {
        $node = $queue->dequeue();

        # We've found what we want
        if ($node === $end) {
            return true;
        }

        foreach ($graph[$node] as $neighbour) {
            if (!in_array($neighbour, $visited)) {
                # Mark neighbour visited
                $visited[] = $neighbour;

                # Enqueue node
                $queue->enqueue($neighbour);
            }
        };
    }

    return false;
}


function bfs_path($graph, $start, $end) {
    $queue = new SplQueue();
    # Enqueue the path
    $queue->enqueue([$start]);
    $visited = [$start];

    while ($queue->count() > 0) {
        $path = $queue->dequeue();

        # Get the last node on the path
        # so we can check if we're at the end
        $node = $path[sizeof($path) - 1];
        
        if ($node === $end) {
            return $path;
        }

        foreach ($graph[$node] as $neighbour) {
            if (!in_array($neighbour, $visited)) {
                $visited[] = $neighbour;

                # Build new path appending the neighbour then and enqueue it
                $new_path = $path;
                $new_path[] = $neighbour;

                $queue->enqueue($new_path);
            }
        };
    }

    return false;
}
