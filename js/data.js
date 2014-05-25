var data = {
    "connections" : {
        "rid1" : {"source" : "node1id", "target" : "node2id", "type" : "ABC"},
        "rid2" : {"source" : "node1id", "target" : "node3id", "type" : "ABC"},
        "rid3" : {"source" : "node1id", "target" : "node4id", "type" : "ABC"},

        "rid5" : {"source" : "node2id", "target" : "node3id", "type" : "ABC"},
        "rid6" : {"source" : "node2id", "target" : "node5id", "type" : "MNO"},

        "rid7" : {"source" : "node3id", "target" : "node6id", "type" : "ABC"},
	    
        "rid8" : {"source" : "node7id", "target" : "node8id", "type" : "ABC"},
        "rid9" : {"source" : "node7id", "target" : "node9id", "type" : "MNO"},
        "rid10" : {"source" : "node9id", "target" : "node8id", "type" : "MNO"}
        },
    "nodeDetails" : {
        "node1id" : { "title" : "A", "tags" : "capital"},
        "node2id" : { "title" : "B", "tags" : "capital"},
        "node3id" : { "title" : "C", "tags" : "capital"},
        "node4id" : { "title" : "a", "tags" : "lower"},
        "node5id" : { "title" : "b", "tags" : "lower"},
        "node6id" : { "title" : "c", "tags" : "lower"},
        "node7id" : { "title" : "apple", "tags" : "word"},
        "node8id" : { "title" : "ball", "tags" : "word"},
        "node9id" : { "title" : "cat", "tags" : "word"}
    }
}
