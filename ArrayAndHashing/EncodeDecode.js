class Solution {
    /**
     * @param {string[]} strs
     * @returns {string}
     */
    encode(strs) {
        var str = "";
        for(var i=0;i<strs.length; i++){
            str += strs[i] + "_!_";
        }
        return str;
    }

    /**
     * @param {string} str
     * @returns {string[]}
     */
    decode(str) {
        var strs = [];
        var oneStr = "";
        for(var i=0;i<str.length; i++){
            if(str[i] == "_" && str[i+1] == "!" && str[i+2] == "_"){
                strs.push(oneStr);
                oneStr = "";
                i += 3;
            }
            oneStr += str[i];
        }
        return strs;
    }
}
