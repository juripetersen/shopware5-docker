<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace GPBMetadata\Google\Bigtable\V2;

class Bigtable
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a83170a21676f6f676c652f6269677461626c652f76322f626967746162" .
            "6c652e70726f746f1212676f6f676c652e6269677461626c652e76321a1d" .
            "676f6f676c652f6269677461626c652f76322f646174612e70726f746f1a" .
            "1e676f6f676c652f70726f746f6275662f77726170706572732e70726f74" .
            "6f1a17676f6f676c652f7270632f7374617475732e70726f746f2292010a" .
            "0f52656164526f77735265717565737412120a0a7461626c655f6e616d65" .
            "18012001280912280a04726f777318022001280b321a2e676f6f676c652e" .
            "6269677461626c652e76322e526f77536574122d0a0666696c7465721803" .
            "2001280b321d2e676f6f676c652e6269677461626c652e76322e526f7746" .
            "696c74657212120a0a726f77735f6c696d697418042001280322f8020a10" .
            "52656164526f7773526573706f6e7365123e0a066368756e6b7318012003" .
            "280b322e2e676f6f676c652e6269677461626c652e76322e52656164526f" .
            "7773526573706f6e73652e43656c6c4368756e6b121c0a146c6173745f73" .
            "63616e6e65645f726f775f6b657918022001280c1a85020a0943656c6c43" .
            "68756e6b120f0a07726f775f6b657918012001280c12310a0b66616d696c" .
            "795f6e616d6518022001280b321c2e676f6f676c652e70726f746f627566" .
            "2e537472696e6756616c7565122e0a097175616c69666965721803200128" .
            "0b321b2e676f6f676c652e70726f746f6275662e427974657356616c7565" .
            "12180a1074696d657374616d705f6d6963726f73180420012803120e0a06" .
            "6c6162656c73180520032809120d0a0576616c756518062001280c12120a" .
            "0a76616c75655f73697a6518072001280512130a0972657365745f726f77" .
            "180820012808480012140a0a636f6d6d69745f726f771809200128084800" .
            "420c0a0a726f775f737461747573222a0a1453616d706c65526f774b6579" .
            "735265717565737412120a0a7461626c655f6e616d65180120012809223e" .
            "0a1553616d706c65526f774b657973526573706f6e7365120f0a07726f77" .
            "5f6b657918012001280c12140a0c6f66667365745f627974657318022001" .
            "280322680a104d7574617465526f775265717565737412120a0a7461626c" .
            "655f6e616d65180120012809120f0a07726f775f6b657918022001280c12" .
            "2f0a096d75746174696f6e7318032003280b321c2e676f6f676c652e6269" .
            "677461626c652e76322e4d75746174696f6e22130a114d7574617465526f" .
            "77526573706f6e736522b0010a114d7574617465526f7773526571756573" .
            "7412120a0a7461626c655f6e616d65180120012809123c0a07656e747269" .
            "657318022003280b322b2e676f6f676c652e6269677461626c652e76322e" .
            "4d7574617465526f7773526571756573742e456e7472791a490a05456e74" .
            "7279120f0a07726f775f6b657918012001280c122f0a096d75746174696f" .
            "6e7318022003280b321c2e676f6f676c652e6269677461626c652e76322e" .
            "4d75746174696f6e228f010a124d7574617465526f7773526573706f6e73" .
            "65123d0a07656e747269657318012003280b322c2e676f6f676c652e6269" .
            "677461626c652e76322e4d7574617465526f7773526573706f6e73652e45" .
            "6e7472791a3a0a05456e747279120d0a05696e6465781801200128031222" .
            "0a0673746174757318022001280b32122e676f6f676c652e7270632e5374" .
            "6174757322e5010a18436865636b416e644d7574617465526f7752657175" .
            "65737412120a0a7461626c655f6e616d65180120012809120f0a07726f77" .
            "5f6b657918022001280c12370a107072656469636174655f66696c746572" .
            "18062001280b321d2e676f6f676c652e6269677461626c652e76322e526f" .
            "7746696c74657212340a0e747275655f6d75746174696f6e731804200328" .
            "0b321c2e676f6f676c652e6269677461626c652e76322e4d75746174696f" .
            "6e12350a0f66616c73655f6d75746174696f6e7318052003280b321c2e67" .
            "6f6f676c652e6269677461626c652e76322e4d75746174696f6e22360a19" .
            "436865636b416e644d7574617465526f77526573706f6e736512190a1170" .
            "72656469636174655f6d61746368656418012001280822780a1952656164" .
            "4d6f646966795772697465526f775265717565737412120a0a7461626c65" .
            "5f6e616d65180120012809120f0a07726f775f6b657918022001280c1236" .
            "0a0572756c657318032003280b32272e676f6f676c652e6269677461626c" .
            "652e76322e526561644d6f64696679577269746552756c6522420a1a5265" .
            "61644d6f646966795772697465526f77526573706f6e736512240a03726f" .
            "7718012001280b32172e676f6f676c652e6269677461626c652e76322e52" .
            "6f7732ad080a084269677461626c65129d010a0852656164526f77731223" .
            "2e676f6f676c652e6269677461626c652e76322e52656164526f77735265" .
            "71756573741a242e676f6f676c652e6269677461626c652e76322e526561" .
            "64526f7773526573706f6e7365224482d3e493023e22392f76322f7b7461" .
            "626c655f6e616d653d70726f6a656374732f2a2f696e7374616e6365732f" .
            "2a2f7461626c65732f2a7d3a72656164526f77733a012a300112ae010a0d" .
            "53616d706c65526f774b65797312282e676f6f676c652e6269677461626c" .
            "652e76322e53616d706c65526f774b657973526571756573741a292e676f" .
            "6f676c652e6269677461626c652e76322e53616d706c65526f774b657973" .
            "526573706f6e7365224682d3e4930240123e2f76322f7b7461626c655f6e" .
            "616d653d70726f6a656374732f2a2f696e7374616e6365732f2a2f746162" .
            "6c65732f2a7d3a73616d706c65526f774b6579733001129f010a094d7574" .
            "617465526f7712242e676f6f676c652e6269677461626c652e76322e4d75" .
            "74617465526f77526571756573741a252e676f6f676c652e626967746162" .
            "6c652e76322e4d7574617465526f77526573706f6e7365224582d3e49302" .
            "3f223a2f76322f7b7461626c655f6e616d653d70726f6a656374732f2a2f" .
            "696e7374616e6365732f2a2f7461626c65732f2a7d3a6d7574617465526f" .
            "773a012a12a5010a0a4d7574617465526f777312252e676f6f676c652e62" .
            "69677461626c652e76322e4d7574617465526f7773526571756573741a26" .
            "2e676f6f676c652e6269677461626c652e76322e4d7574617465526f7773" .
            "526573706f6e7365224682d3e4930240223b2f76322f7b7461626c655f6e" .
            "616d653d70726f6a656374732f2a2f696e7374616e6365732f2a2f746162" .
            "6c65732f2a7d3a6d7574617465526f77733a012a300112bf010a11436865" .
            "636b416e644d7574617465526f77122c2e676f6f676c652e626967746162" .
            "6c652e76322e436865636b416e644d7574617465526f7752657175657374" .
            "1a2d2e676f6f676c652e6269677461626c652e76322e436865636b416e64" .
            "4d7574617465526f77526573706f6e7365224d82d3e493024722422f7632" .
            "2f7b7461626c655f6e616d653d70726f6a656374732f2a2f696e7374616e" .
            "6365732f2a2f7461626c65732f2a7d3a636865636b416e644d7574617465" .
            "526f773a012a12c3010a12526561644d6f646966795772697465526f7712" .
            "2d2e676f6f676c652e6269677461626c652e76322e526561644d6f646966" .
            "795772697465526f77526571756573741a2e2e676f6f676c652e62696774" .
            "61626c652e76322e526561644d6f646966795772697465526f7752657370" .
            "6f6e7365224e82d3e493024822432f76322f7b7461626c655f6e616d653d" .
            "70726f6a656374732f2a2f696e7374616e6365732f2a2f7461626c65732f" .
            "2a7d3a726561644d6f646966795772697465526f773a012a429b010a1663" .
            "6f6d2e676f6f676c652e6269677461626c652e7632420d4269677461626c" .
            "6550726f746f50015a3a676f6f676c652e676f6c616e672e6f72672f6765" .
            "6e70726f746f2f676f6f676c65617069732f6269677461626c652f76323b" .
            "6269677461626c65aa0218476f6f676c652e436c6f75642e426967746162" .
            "6c652e5632ca0218476f6f676c655c436c6f75645c4269677461626c655c" .
            "5632620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

