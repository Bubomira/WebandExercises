import * as d3 from 'd3'

const height =140;
const width =250;
const radius = 119;
const gridSize = 15;
const cols = Math.floor(width/ gridSize)/2;
const rows = Math.floor(height/ gridSize)-1;


const createGraph=(outline,left,rigth,value)=>{
  
  let svgEl = d3.create('svg')
  .attr('width', width)
  .attr('height', height);
  
  //Create table behind circle
  for (let i = 0; i <= cols; i++) {
    svgEl.append("line")
    .attr("x1", i *2* gridSize)
    .attr("y1", 0)
    .attr("x2", i *2* gridSize)
    .attr("y2", height-20)
    .attr("stroke", "#ccc")
    .attr("stroke-width", 1);
  }
  
  for (let j = 0; j <= rows; j++) {
    svgEl.append("line")
    .attr("x1", 0)
    .attr("y1", j * gridSize)
    .attr("x2", width-10)
    .attr("y2", j * gridSize)
    .attr("stroke", "#ccc")
    .attr("stroke-width", 1);
  }
  
  //Create the arc
  let arc = d3.arc()
  .innerRadius(0)      
  .outerRadius(radius)   
  .startAngle(-Math.PI/2)        
  .endAngle(Math.PI/2);   

  svgEl.append("defs").append("marker")
  .attr("id", `arrow-${left}`)
  .attr("viewBox", "0 0 10 10")
  .attr("refX", 5)
  .attr("refY", 5)
  .attr("markerWidth", 10)
  .attr("markerHeight", 4)
  .attr("orient", "auto-start-reverse")
  .append("path")
  .attr("d", "M 0 0 L 10 5 L 0 10 z")
  .attr("fill", outline);


  let defs = svgEl.append('defs')
  
  let gradient = defs.append('linearGradient')
    .attr('id', `arc-gradient-${left}`)
    .attr('x1', '0%')
    .attr('y1', '0%')
    .attr('x2', '100%')
    .attr('y2', '0%')

  gradient.append('stop')
    .attr('offset', '0%')
    .attr('stop-color',left)

  gradient.append('stop')
    .attr('offset', '100%')
    .attr('stop-color', rigth)

  svgEl.append('g')
    .attr('transform', `translate(120, 120)`)
    .append('path')
    .attr('d', arc)
    .attr('fill', `url(#arc-gradient-${left})`)
    .attr('stroke', outline)
    .attr('stroke-width', 1)

  //Create the arrow
  const angleScale = d3.scaleLinear()
  .domain([0, 100])
  .range([-Math.PI, 0]);

  const needleLength = 100;

  const angle = angleScale(value);
  const x = needleLength * Math.cos(angle);
  const y = needleLength * Math.sin(angle);


  svgEl.append("line")
    .attr("class", "needle")
    .attr("x1", 120)
    .attr("y1", 119)
    .attr("x2", 115 + x)
    .attr("y2", 100 + y)
    .attr("stroke", outline)
    .attr("stroke-width", 4)
    .attr("marker-end", `url(#arrow-${left})`);

  //Create the text below the circle
  svgEl.append("text")
    .attr("class", "needle")
    .attr("x", 0)
    .attr("y", 130)
    .attr("fill", "black")
    .attr("font-size", "10px")
    .text("0%")

   svgEl.append("text")
    .attr("class", "needle")
    .attr("x", width-25)
    .attr("y", 130)
    .attr("fill", "black")
    .attr("font-size", "10px")
    .text("30%")

    svgEl.append("text")
    .attr("class", "needle")
    .attr("x", width/2.5)
    .attr("y", 140)
    .attr("fill", outline)
    .attr("font-weight", "600")
    .attr("font-size", "18px")
    .text(`+${value}%`)


  return svgEl.node();
}

export const createGreenGraph = createGraph.bind(null,'#248E70','#8AFFCE','#248E70');

export const createRedGraph =createGraph.bind(null,'#B80D0D','#FFCFCF','#FFA1A1');

